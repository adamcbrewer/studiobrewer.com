<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files:
  sortable: true
  fields:
    client:
      label: Name of the client or brand
      type: text
    caption:
      label: Caption (optional - not used on client brands)
      type: text
fields:
  title:
    label: Page Title
    type:  text

  _headerOne:
    label: Section - Introduction
    type: headline
  sectionTitleOne:
    label: Section Title
    type: text
  _infoTwo:
    label: Your Profile photo
    type: info
    text: >
      Make sure to name your profile photo _me_, in either .jpg of .png format.
  header:
    label: Main Header
    type: text
  about:
    label: About You
    type:  textarea
  _headerTwo:
    label: Section - Client Branding
    type: headline
  sectionTitleTwo:
    label: Section Title
    type: text
  _infoThree:
    label: Client Brands
    type: info
    text: >
      Images for client brands can be uploaded under the files section on the left,
      where you'll be able to arrange and sort them.
  _headerThree:
    label: Section - Skills
    type: headline
  sectionTitleThree:
    label: Section Title
    type: text
  languages:
    label: Programming Languages
    type: tags
  frameworks:
    label: Frameworks
    type: tags
  workflow:
    label: Workflow
    type: tags

  _headerFour:
    label: Section - Sign-off
    type: headline
  sectionTitleFour:
    label: Section Title
    type: text
  TextSectionFour:
    label: Sign-off Copy
    type:  textarea
