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
  profile_image_filename:
    label: You Profile Image
    type: select
    options: images
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
  client_brands_structure:
    label: Client Brands
    type: structure
    width: 1/2
    entry: >
      <b>Client Name</b>:&nbsp;&nbsp; <i>{{name}}</i> <br>
      <b>Image</b>:&nbsp;&nbsp; <i>{{image_filename}}</i>
    fields:
      name:
        label: Client Name
        type: text
      image_filename:
        label: Image
        type: select
        options: images

