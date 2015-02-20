<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages: false
files: false
fields:
  title:
    label: Page Title
    type:  text

  _headerOne:
    label: Section - Contact Email
    type: headline
  sectionTitleOne:
    label: Section Title
    type: text
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
