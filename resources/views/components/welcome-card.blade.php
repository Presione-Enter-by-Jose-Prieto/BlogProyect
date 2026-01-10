@props(['posts' => collect()])

<div class="main-top">
    <div class="main-top-left max-w-[40%]">
        <h1 class="main-top-header" style="display: inline;">
            <a href="" title="Bienvenidos">Bienvenidos</a> a BlogProyect,
        </h1>
    </div>
    
    <div class="main-top-right">
        <p style="color: var(--color-base);" class="text-[12.5px]">
            <span class="text-[#36C] cursor-pointer hover:underline font-semibold hover:text-[#3056A9]">{{ ($posts ?? collect())->count()}}</span> artículos en español.
        </p>
    </div>
</div>

<style>
    :root {
        --color-base: #202122;
        --color-base-fixed: #202122;
        --color-base--hover: #404244;
        --color-emphasized: #101418;
        --color-subtle: #54595d;
        --color-placeholder: #72777d;
        --color-disabled: #a2a9b1;
        --color-progressive: #36c;
        --color-progressive--hover: #3056a9;
        --color-progressive--active: #233566;
        --color-progressive--focus: #36c;
        --font-size-medium: 1rem;
        --line-height-medium: 1.6;
        --line-height-content: 1.625;
    }
    
    body {
        --background-color-neutral-subtle: #f8f9fa;
        font-size: var(--font-size-medium);
        line-height: var(--line-height-content);
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;
        color: var(--color-base);
    }
    
    .main-top {
        font-size: 1rem;
        margin-top: 1rem;
        padding-bottom: 1.5rem;
    }
    
    @media (min-width: 720px) {
        .main-top {
            background-color: #f8f9fa;
            border: 1px solid #c8ccd1;
            border-radius: 2px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
            margin-bottom: 1rem;
            padding: 1rem;
        }
    }
    
    @media (min-width: 1000px) {
        .main-top {
            align-items: center;
            background-image: url(https://upload.wikimedia.org/wikipedia/commons/e/e3/Wikipedia_logo_letters_banner.svg);
            background-position: right;
            background-repeat: no-repeat;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            margin-top: 0.5rem;
            padding: 0 1.5rem 0 0;
        }
    }
    
    .main-top-left {
        flex: 1;
        margin-bottom: 1rem;
    }
    
    @media (min-width: 1000px) {
        .main-top-left {
            background-image: linear-gradient(to right, #f8f9fa 0%, #f8f9fa 70%, rgba(248, 249, 250, 0) 100%);
            flex: 1.75;
            padding: 2rem 0 2rem 1.5rem;
            margin-bottom: 0;
        }
    }
    
    .main-top-header {
        font-family: 'Linux Libertine', 'Georgia', serif;
        font-size: 1.8em;
        font-weight: normal;
        margin: 0;
        padding: 0;
    }
    
    .main-top-right {
        margin-top: 1.5rem;
    }
    
    @media (min-width: 1000px) {
        .main-top-right {
            margin-top: 0;
            text-align: right;
        }
    }
    
    .main-top a {
        color: var(--color-progressive);
        text-decoration: none;
    }
    
    .main-top a:hover {
        color: var(--color-progressive--hover);
        text-decoration: underline;
    }
    
    .main-top-mobileSearch {
        display: block;
    }
    
    @media (min-width: 720px) {
        .main-top-mobileSearch {
            display: none;
        }
    }
    
    .mw-ui-button {
        background-color: #f8f9fa;
        border: 1px solid #c8ccd1;
        border-radius: 2px;
        padding: 8px 12px;
        text-decoration: none;
        color: var(--color-progressive);
        display: inline-block;
        cursor: pointer;
        font-size: 0.875rem;
    }
    
    .mw-ui-button:hover {
        background-color: #eff0f1;
        border-color: #a2a9b1;
    }
</style>