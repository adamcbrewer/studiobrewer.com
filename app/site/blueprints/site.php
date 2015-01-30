<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  sortable: true
  max: 5
fields:
  _headerOne:
    label: Site Configuration
    type: headline
  title:
    label: Site Name
    type: text
    width: 1/2
  author:
    label: Your Name
    type: text
    width: 1/2
  email:
    label: Contact Email Address
    type: email
    width: 1/2
  analytics:
    label:  Google Analytics Tracking code
    type: text
    default: UA-XXXXXX-X
    width: 1/2
  description:
    label: Site Description (SEO meta)
    type:  text
  keywords:
    label: Site Keywords (SEO meta)
    type:  tags
  copyright:
    label: Copyright
    type:  textarea

  _headerTwo:
    label: Social Links
    type: headline
  _infoOne:
    label: &nbsp;
    type: info
    text: >
      Only the first three will be displayed. Arrange them in the order you'd like them to appear.
  externallinks:
      label: Social Links
      type: structure
      entry: >
        {{title}} <br>
        <em><a href="{{url}}">{{url}}</a></em>
      fields:
        title:
          label: Title
          type: text
        url:
          label: URL
          type: url

  _headerThree:
    label: Twitter Settings
    type: headline
  _infoTwo:
    label: &nbsp;
    type: info
    text: >
      Turning off the stream will not display any tweets, anywhere on the site, from your account.
  showTweets:
    label: Show Twitter Stream?
    type: toggle
    text: yes/no
  _infoThree:
    label: &nbsp;
    type: info
    text: >
      Only tweets with this hashtag will be displayed. If it's left blank all your tweets will
      be displayed by default.
  tweetFilter:
    label: Tweet-Filter Keyword
    type: text
