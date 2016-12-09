$(function() {
  // SETUP
  var $newItemForm, $newItemButton;
  var item = '';                                 // item is an empty string
  $basicinfo = $('#basicinfoform');              //div for basic info
  $skills = $('#skillsform');          //div for skills
  $workexperience = $('#workform');              //div for work experience
  $addinfo = $('#addform');          //div for additionalinfo

  //degree tables
  $degreetable2 = $('#degreetable2');
  $degreetable3 = $('#degreetable3');

  //skill Tables
  $skilltable2 = $('#skillstable2');
  $skilltable3 = $('#skillstable3');

  //workexperience Tables
  $worktable2 = $('#experiencetable2');
  $worktable3 = $('#experiencetable3');


  // SETUP FORM FOR NEW ITEMS
  $basicinfo.show();                          // show basicinfo but hide the rest!
  $skills.hide();
  $workexperience.hide();
  $addinfo.hide();

  //Hide Tables on Start That Arent Needed
  $degreetable2.hide();
  $degreetable3.hide();
  $skilltable2.hide();
  $skilltable3.hide();
  $worktable2.hide();
  $worktable3.hide();

  //Degree Table Button Functions
  $('#additionaldegrees1').on('click', function(e) { // show next form, skills, but hide the rest!
    e.preventDefault;
    $('#additionaldegrees1').hide();
    $degreetable2.slideDown();
  });

  $('#additionaldegrees2').on('click', function(e) { // show next form, skills, but hide the rest!
    e.preventDefault;
    $('#additionaldegrees2').hide();
    $degreetable3.slideDown();
  });

  //buttons for basicinfo
  $('#soarnext').on('click', function(e) { // show next form, skills, but hide the rest!
    e.preventDefault;
    $basicinfo.slideUp();
    $skills.show(1000);
  });

  //tables for skills buttons
  $('#addskill1').on('click', function(e) { // show next form, skills, but hide the rest!
    e.preventDefault;
    $('#addskill1').hide();
    $skilltable2.slideDown();
  });

  $('#addskill2').on('click', function(e) { // show next form, skills, but hide the rest!
    e.preventDefault;
    $('#addskill2').hide();
    $skilltable3.slideDown();
  });

  //buttons for skills
  $('#skillback').on('click', function(e) { // show previous form, basicinfo, but hide the rest!
    e.preventDefault;
    $skills.slideUp();
    $basicinfo.show(1000);
  });

  $('#skillnext').on('click', function(e) { // show next form, workexperience, but hide the rest!
    e.preventDefault;
    $skills.slideUp();
    $workexperience.show(1000);
  });

  //tables for workexperience
  $('#addexperience1').on('click', function(e) { // show next form, skills, but hide the rest!
    e.preventDefault;
    $('#addexperience1').hide();
    $worktable2.slideDown();
  });

  $('#addexperience2').on('click', function(e) { // show next form, skills, but hide the rest!
    e.preventDefault;
    $('#addexperience2').hide();
    $worktable3.slideDown();
  });

  //buttons for work experience form
  $('#workback').on('click', function(e) { // show next form, skills, but hide the rest!
    e.preventDefault;
    $workexperience.slideUp();
    $skills.show(1000);
  });

  $('#worknext').on('click', function(e) { // show next form, additionalinfo, but hide the rest!
    e.preventDefault;
    $workexperience.slideUp();
    $addinfo.show(1000);
  });

  //buttons for additionalinfo
  $('#addinfoback').on('click', function(e) { // show next form, skills, but hide the rest!
    e.preventDefault;
    $addinfo.slideUp();
    $workexperience.show(1000);
  });

});
