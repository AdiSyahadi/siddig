import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

Alpine.plugin(intersect);

// Language store (ID/EN)
Alpine.store('lang', {
    current: localStorage.getItem('lang') || 'id',
    get isEn() { return this.current === 'en'; },
    get isId() { return this.current === 'id'; },
    toggle() {
        this.current = this.current === 'id' ? 'en' : 'id';
        localStorage.setItem('lang', this.current);
        document.documentElement.lang = this.current;
    }
});

// Theme store (dark/light)
Alpine.store('theme', {
    current: localStorage.getItem('theme') || 'dark',
    get isDark() { return this.current === 'dark'; },
    get isLight() { return this.current === 'light'; },
    toggle() {
        this.current = this.current === 'dark' ? 'light' : 'dark';
        localStorage.setItem('theme', this.current);
        document.documentElement.classList.toggle('light', this.current === 'light');
        document.querySelector('meta[name="theme-color"]')
            ?.setAttribute('content', this.current === 'light' ? '#ffffff' : '#020a13');
    }
});

window.Alpine = Alpine;
Alpine.start();

// dataLayer event tracking for CTA clicks
document.addEventListener('click', function(e) {
    const link = e.target.closest('a[href*="wa.me"], button[type="submit"], a[href="#contact"]');
    if (link && window.dataLayer) {
        const label = link.textContent?.trim() || 'unknown';
        window.dataLayer.push({
            event: 'cta_click',
            cta_text: label,
            cta_url: link.href || '',
            cta_location: link.closest('section')?.id || 'unknown'
        });
    }
});
