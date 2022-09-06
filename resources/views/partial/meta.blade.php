<meta name="description" content="{{ $general->description }}">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="{{ $general->name }}">
<meta itemprop="description" content="{{ $general->description }}">
<meta itemprop="image" content="{{ asset('storage/' . $general->logo_seo) }}">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://sirtanio.id">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $general->name }}">
<meta property="og:description" content="{{ $general->description }}">
<meta property="og:image" content="{{ asset('storage/' . $general->logo_seo) }}">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $general->name }}">
<meta name="twitter:description" content="{{ $general->description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $general->logo_seo) }}">