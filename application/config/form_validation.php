<?php
$config = [
  'add_users_rules' => [
    [
      'field'=>'first_name',
      'label'=>'First Name',
      'rules'=>'required|alpha'
    ],
    [
      'field'=>'last_name',
      'label'=>'Last Name',
      'rules'=>'required|alpha'
    ],
    [
      'field'=>'email',
      'label'=>'Email',
      'rules'=>'required|valid_emails|is_unique[user.email]'
    ],
    [
      'field'=>'password',
      'label'=>'Password',
      'rules'=>'required|max_length[16]'
    ]
  ],
]
?>
