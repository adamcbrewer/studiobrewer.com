<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
files: true
fields:
  title:
    label: Title
    type:  text

  _headerOne:
    label: Section - Hero
    type: headline
  text:
    label: Intro Text
    type:  text
  status:
    label: Current Status
    type: text
  buttonWork:
    label: Work Button Text
    type: text
  buttonAbout:
    label: About Button Text
    type: text

  _headerTwo:
    label: Section - Features
    type: headline
  titleFeatures:
    label: Features Title
    type: text
  buttonView:
    label: View Project Button Text
    type: text
  featured_project_uids:
    label: Featured Projects
    type: structure
    width: 1/4
    entry: >
      {{ uid }}
    fields:
      uid:
        label: Project
        type: select
        options: query
        query:
          page: work
          fetch: visibleChildren
          value: '{{uid}}'
          text: '{{uid}}'

  _headerThree:
    label: Section - Twitter
    type: headline
  sectionTitleThree:
    label: Section Title
    type: text
  buttonTwitter:
    label: Twitter Button Text
    type: text

  _headerFour:
    label: Section - Get In Touch
    type: headline
  _infoOne:
    label: &nbsp;
    type: info
    text: >
      You change how your email and phone number links are displayed from the fields below, but the actual email address and phone number can be changed within the global site options.
  sectionTitleFour:
    label: Section Title
    type: text
  email_text:
    label: Email Text
    type: text
  phone_text:
    label: Phone Text
    type: text
  contact_text:
    label: Text
    type:  textarea
  contact_image_filename:
    label: Contact Image
    type: select
    options: images
