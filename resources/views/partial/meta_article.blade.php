<meta name="description" content="{{ $article->seo_description }}">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="{{ $article->seo_title }}">
<meta itemprop="description" content="{{ $article->seo_description }}">
<meta itemprop="image" content="{{ asset('storage/' . $article->image) }}">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://sirtanio.id">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $article->seo_title }}">
<meta property="og:description" content="{{ $article->seo_description }}">
<meta property="og:image" content="{{ asset('storage/' . $article->image) }}">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $article->seo_title }}">
<meta name="twitter:description" content="{{ $article->seo_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $article->image) }}">