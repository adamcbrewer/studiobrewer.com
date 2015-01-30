/**
 * Converts newline characters to HTML <br /> elements
 *
 * @author Adam Brewer - @adamcbrewer - adamcbrewer.com
 *
 * Usage: "String goes\n\rhere".nl2br();
 *
 */
String.prototype.nl2br = function () {
    return this.replace(/(\r\n|\n|\r)/gm, "<br />");
}


/**
 * Tweets
 *
 */
var Tweet = function (tweet, $template, filterHash) {

    this.months = {
        long: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        short: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    };

    this.tweet = tweet;
    this.text = tweet.text;

    this.filterHash = filterHash || null;

    this.$template = $template.cloneNode(true);
    this.$tweet;

    this.createTweetNode();

    return this.$tweet;

};

Tweet.prototype.createTweetNode = function () {

    this.$tweet = this.$template.cloneNode(true);
    this.$tweet.id = this.tweet.id_str;

    this
        .insertTime()
        .insertText();

};

Tweet.prototype.insertTime = function () {

    var fullDate = this.createFullDate(this.tweet.created_at);
    var humanDate = this.createHumanDate(this.tweet.created_at);

    this.$tweet.querySelectorAll('.tweet-time')[0].innerHTML = humanDate;
    this.$tweet.querySelectorAll('.tweet-time')[0].setAttribute('datetime', fullDate);
    this.$tweet.querySelectorAll('.tweet-time')[0].title = fullDate;
    return this;

};

Tweet.prototype.insertText = function () {

    this.insertHyperlinks();

    this.$tweet.querySelectorAll('.tweet-body')[0].innerHTML = this.text.nl2br();
    return this;

};

Tweet.prototype.insertHyperlinks = function () {

    this.stripFilterHash()
        .linkUrls()
        .linkMentions()
        .linkMedia()
        .linkHashTags();
    return this;

};

Tweet.prototype.stripFilterHash = function () {

    if (this.filterHash) {
        this.text = this.text.replace(this.filterHash, '');
    }
    return this;

};

Tweet.prototype.linkHashTags = function () {

    var hashtags = this.tweet.entities.hashtags;
    var x = hashtags.length;
    while (x--) {
        this.text = this.text.replace('#' + hashtags[x].text, '<a target="_blank" href="https://twitter.com/hashtag/'+ hashtags[x].text +'">#'+ hashtags[x].text +'</a>');
    }
    return this;

};

Tweet.prototype.linkMentions = function () {

    var mentions = this.tweet.entities.user_mentions;
    var x = mentions.length;
    while (x--) {
        this.text = this.text.replace('@' + mentions[x].screen_name, '<a title="'+ mentions[x].name +'" target="_blank" href="https://twitter.com/'+ mentions[x].screen_name +'">@'+ mentions[x].screen_name +'</a>');
    }
    return this;

};

Tweet.prototype.linkMedia = function () {

    var media = this.tweet.entities.media;
    if (!media) return this;
    var x = media.length;
    while (x--) {
        this.text = this.text.replace(media[x].url, '<a target="_blank" href="'+ media[x].url +'">'+ media[x].url +'</a>');
    }
    return this;

};

Tweet.prototype.linkUrls = function (text) {

    var urls = this.tweet.entities.urls;
    var x = urls.length;
    while (x--) {
        this.text = this.text.replace(urls[x].url, '<a title="'+ urls[x].expanded_url +'" target="_blank" href="'+ urls[x].expanded_url +'">'+ urls[x].url +'</a>');
    }
    return this;

};

Tweet.prototype.createHumanDate = function () {

    var date = new Date(this.tweet.created_at);
    var month = this.months.short[date.getMonth()]
    var day = date.getDate();

    if (day < 10) day = '0' + day;

    day += this.getDaySuffix(day);

    return [day, month].join(' ');

};

Tweet.prototype.createFullDate = function () {

    return new Date(this.tweet.created_at);;

};

Tweet.prototype.getDaySuffix = function (day) {

    var suffix = 'th';

    switch (day) {
        case 01:
            suffix = 'st';
        case 02:
            suffix = 'nd';
        case 03:
            suffix = 'rd';
        default:
            break;
    }

    return suffix;

};
