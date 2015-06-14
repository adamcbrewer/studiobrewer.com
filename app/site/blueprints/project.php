<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
  fields:
    caption:
      label: Caption (optional)
      type: text
    _lineOne:
      type: line
    _infoOne:
      label: Choosing your layout
      type: info
      text: >
        Project images are full width by default. Selecting one of the options below will float the images according to the size shown, but remember to pair one ratio with another. For example: half-size images should be ordered next to each other and likewise for third and two-thirds images.


        Layout ratios do not affect thumbnails or homepage feature images.
    layout:
      label: Layout Options/Ratios
      type: radio
      default: full
      options:
        full: Full width
        half: Half size
        third: One third
        twothirds: Two thirds

fields:
  _headerOne:
    label: Section – Images
    type: headline
  featuredFilename:
    label: Feature Image (defaults to image named 'feature')
    type: select
    options: images
  thumbFilename:
    label: Thumbnail Image (defaults to image named 'thumb')
    type: select
    options: images
  _infoOne:
    type: info
    text: >
      **Images sizes:** <br>
      – Thumbnail: 440px <br>
      – Feature: 920px <br>
      – All others: 1400px (full), 680px (half), 440px (one third), 920px (two thirds)

  _headerTwo:
    label: Section - Project Information
    type: headline
  title:
    label: Project Title
    type:  text
  summary:
    label: Project Summary
    type:  text
  intro:
    label: Introduction
    type:  textarea
  details:
    label: Details
    type: textarea
