<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ isset($title)? "$title - CMS" : "CMS" }}</title>
<link rel="stylesheet" href="/assets/cms/tabler.min.css">
<link rel="stylesheet" href="/assets/cms/tabler-vendors.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/cms/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/cms/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/cms/favicon/favicon-16x16.png">