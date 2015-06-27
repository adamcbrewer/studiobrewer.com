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
      label: Caption (Not used on client brands)
      type: text
fields:
  title:
    label: Page Title
    type:  text

  _header_intro:
    label: Section - Introduction
    type: headline
  header:
    label: Main Header
    type: text
  _infoTwo:
    label: Your Profile Photo
    type: info
    text: >
      Make sure to name your profile photo _me_, in either .jpg of .png format.
  about:
    label: About You
    type:  textarea

  _header_skills:
    label: Section - Skills
    type: headline
  section_title_skills:
    label: Section Title
    type: text
  skills_box_title_left:
    label: Left Box Title
    type: text
  skills_box_content_left:
    label: Left Box Content
    type: textarea
  skills_box_title_right:
    label: Right Box Title
    type: text
  skills_box_content_right:
    label: Right Box Content
    type: textarea

  _header_clients:
    label: Section - Client Branding
    type: headline
  section_title_clients:
    label: Section Title
    type: text
  _infoThree:
    label: Client Brands
    type: info
    text: >
      Images for client brands can be uploaded under the files section on the left,
      where you'll be able to arrange and sort them.
