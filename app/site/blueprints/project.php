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
    label: Section - Project Information
    type: headline
  _infoTwo:
    label: Please Note
    type: info
    text: >
      Make sure the project thumbnail is named _thumb_, otherwise the first project image will be used and likely cropped. If you want to feature this project on the Home page, please make sure to upload an appropriately sized image name _feature_.


      **Images sizes:**

      Thumbnail: 410x320

      Feature: 994xXXX

      All others: 1300xXXX (full), 615xYYY (half), 395xZZZ (one third), 835xZZZ (two thirds)
  title:
    label: Title
    type:  text
  summary:
    label: Feature Summary
    type:  text
  summaryThumbnail:
    label: Thumbnail Summary
    type:  text
  intro:
    label: Introduction
    type:  textarea
  introDetails:
    label: Introduction Details
    type:  textarea
  furthermore:
    label: Furthermore (Displayed below the first project image)
    type:  textarea
  furthermoreColumns:
    label: Furthermore Columns
    type: radio
    default: two
    options:
      one: One Column
      two: Two Columns
      three: Three Columns
  signoff:
    label: Sign-off
    type:  textarea
  homepage:
    label: Display this project on the Home page?
    type: toggle
    text: yes/no
    default: no
    width: 1/2
  _infoThree:
    label: &nbsp;
    type: info
    width: 1/2
    text: >
      If the following option is enabled then this project will be displayed on the Home page, using the first uploaded image (not the thumbnail). There's no limit to the number of projects displayed on the Home page.
