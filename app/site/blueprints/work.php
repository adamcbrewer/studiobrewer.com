<?php if(!defined('KIRBY')) exit ?>

title: Work
pages:
  template: project
  sortable: true
  limit: 50
files: false
fields:
  title:
    label: Title
    type:  text

  _headerOne:
    label: Section - Work
    type: headline
  header:
    label: Main Header
    type: text
  buttonView:
    label: View Project Button Text
    type: text
