<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
files: false
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
