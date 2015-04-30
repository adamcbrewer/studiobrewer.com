<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages: false
files:
  sortable: true
  fields:
    caption:
      label: Caption
      type: text
fields:
  title:
    label: Page Title
    type:  text

  _headerOne:
    label: Section - Contact Email
    type: headline
  email_text:
    label: Email Text
    type: text
  _infoTwo:
    label: Your Contact Photo
    type: info
    text: >
      Make sure to name your contact photo _contact_, in either .jpg of .png format.
  text:
    label: Text
    type:  textarea

  _headerTwo:
    label: Section - Social Links
    type: headline
  sectionTitleTwo:
    label: Section Title
    type: text
  text:
    label: Text
    type:  textarea
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
