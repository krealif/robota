<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ isset($title)? "$title - CMS" : "CMS" }}</title>
<link rel="stylesheet" href="/assets/cms/tabler.min.css">
<link rel="stylesheet" href="/assets/cms/tabler-vendors.min.css">
<script src="https://unpkg.com/alpinejs" defer></script>