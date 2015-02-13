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
  buttonFeatures:
    label: Features Button Text
    type: text

  _headerThree:
    label: Section - Twitter
    type: headline
  sectionTitleThree:
    label: Section Title
    type: text
  buttonTwitter:
    label: Twitter Button Text
    type: text
