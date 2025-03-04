@php
    
    $url = request()->url();
    $url = str_replace('http://', 'https://', $url);
    $url = str_replace('beta.', '', $url);
    $url = str_replace('localhost:8000', 'housebhopla.com', $url);
    $page['url'] = $url;

@endphp

<!-- Required meta tags -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $page['title'] ?? 'HouseBhopal | Best Construction Company & Builders in Bhopal' }}</title>
<meta name="description"
    content="{{ $page['description'] ?? 'HouseBhopal is a top construction company and builder in Bhopal, specializing in civil construction, home building, and apartment development. Get the best quality construction services today!' }}">
<meta name="keywords"
    content="{{ $page['keywords'] ?? 'best construction company in Bhopal, top builders in Bhopal, civil construction services, house construction in Bhopal, home builders in Bhopal, Bhopal constructions, trusted civil builders in Bhopal, home construction services, apartment builders in Bhopal' }}">
<meta name="author" content="HouseBhopal">
<meta name="robots" content="{{ $page['robots'] ?? 'index, follow' }}">
<meta name="language" content="English">
<meta name="theme-color" content="#1e88e5">

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="/builtup/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/builtup/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/builtup/images/favicons/favicon-16x16.png">
<link rel="manifest" href="/builtup/images/favicons/site.webmanifest">

<!-- Open Graph Meta Tags -->
<meta property="og:type" content="{{ $page['og_type'] ?? 'website' }}">
<meta property="og:title" content="{{ $page['title'] ?? 'HouseBhopal | Best Construction Company & Builders in Bhopal' }}">
<meta property="og:description"
    content="{{ $page['description'] ?? 'Looking for the best construction company or builder in Bhopal? HouseBhopal provides top-quality home and apartment construction with expert civil engineers.' }}">
<meta property="og:url" content="{{ $page['url'] ?? 'https://housebhopal.com' }}">
<meta property="og:image" content="{{ $page['image'] ?? 'https://housebhopal.com/builtup/images/logo-200.png' }}">
<meta property="og:site_name" content="HouseBhopal">
<meta property="og:locale" content="en_US">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $page['title'] ?? 'HouseBhopal | Best Construction Company & Builders in Bhopal' }}">
<meta name="twitter:description"
    content="{{ $page['description'] ?? 'Find the best construction services in Bhopal with HouseBhopal. We specialize in civil construction, home building, and apartment development.' }}">
<meta name="twitter:image"
    content="{{ $page['image'] ?? 'https://housebhopal.com/builtup/images/logo-200.png' }}">
<meta name="twitter:site" content="@housebhopal">
<meta name="twitter:creator" content="@housebhopal">

<link rel="canonical" href="{{ $page['url'] ?? 'https://housebhopal.com' }}">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "HouseBhopal",
    "url": "https://housebhopal.com",
    "logo": "https://housebhopal.com/builtup/images/logo-200.png",
    "sameAs": [
        "https://www.linkedin.com/company/housebhopal",
        "https://www.instagram.com/housebhopal"
    ],
    "description": "HouseBhopal is the best construction company and top builder in Bhopal, offering expert home and civil construction services. Build your dream home with us today."
}
</script>


<!-- Referrer Policy -->
<meta name="referrer" content="no-referrer-when-downgrade">

<!-- Cache Control -->
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<!-- Prefetching -->
<link rel="dns-prefetch" href="//www.google-analytics.com">
<link rel="preconnect" href="//fonts.gstatic.com" crossorigin>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- Google Analytics & Microsoft Clarity to be Added Here -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-657Q992N67"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-657Q992N67');
</script>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "qj11qg1iiv");
</script>