{{-- CTA Section with Lead Capture Form --}}
<section id="contact" class="relative py-16 lg:py-20 overflow-hidden section-glow section-glow-bc"
         x-data="{ shown: false, formSubmitted: false, formLoading: false, formError: '', formData: { name: '', email: '', phone: '', service: '', message: '' } }"
         x-intersect.once="shown = true">

    {{-- Background --}}
    <div class="absolute inset-0 bg-gradient-to-b from-dark-950 via-brand-900/10 to-dark-950"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

            {{-- Left: Text Content --}}
            <div class="reveal-base"
                 :class="shown ? 'reveal-visible' : ''">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">
                    <span x-text="$store.lang.isEn ? 'Ready to Start Your' : 'Siap Memulai Proyek'"></span><br>
                    <span class="bg-gradient-to-r from-brand-300 to-brand-500 bg-clip-text text-transparent" x-text="$store.lang.isEn ? 'Website Project?' : 'Website Anda?'"></span>
                </h2>
                <p class="mt-6 text-lg text-gray-400 leading-relaxed" x-text="$store.lang.isEn ? 'Let\'s discuss how SidodadiDigital can help your business grow, innovate, and succeed digitally.' : 'Mari diskusikan bagaimana SidodadiDigital dapat membantu bisnis Anda berkembang, berinovasi, dan sukses secara digital.'">
                </p>

                {{-- Contact Info --}}
                <div class="mt-8 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center bg-brand-600/10 border border-brand-600/20 rounded-xl">
                            <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Email</p>
                            <p class="text-sm text-white font-medium">hello@sidodadidigital.com</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center bg-brand-600/10 border border-brand-600/20 rounded-xl">
                            <svg class="w-5 h-5 text-brand-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">WhatsApp</p>
                            <p class="text-sm text-white font-medium">+62 812-3456-7890</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center bg-brand-600/10 border border-brand-600/20 rounded-xl">
                            <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400" x-text="$store.lang.isEn ? 'Location' : 'Lokasi'"></p>
                            <p class="text-sm text-white font-medium">Surabaya, Jawa Timur</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Contact Form --}}
            <div class="reveal-base reveal-delay-1"
                 :class="shown ? 'reveal-visible' : ''">

                {{-- Success Message --}}
                <div x-show="formSubmitted" x-cloak
                     class="bg-surface border border-green-400/30 rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-green-400/10 border border-green-400/20 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2" x-text="$store.lang.isEn ? 'Message Sent!' : 'Pesan Terkirim!'"></h3>
                    <p class="text-gray-400" x-text="$store.lang.isEn ? 'We\'ll get back to you within 1 hour.' : 'Kami akan membalas dalam 1 jam.'"></p>
                </div>

                {{-- Form --}}
                <form x-show="!formSubmitted"
                      @submit.prevent="
                          formLoading = true;
                          formError = '';
                          fetch('{{ route('contact.store') }}', {
                              method: 'POST',
                              headers: {
                                  'Content-Type': 'application/json',
                                  'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                                  'Accept': 'application/json'
                              },
                              body: JSON.stringify(formData)
                          })
                          .then(r => r.json().then(data => ({ ok: r.ok, data })))
                          .then(({ ok, data }) => {
                              formLoading = false;
                              if (ok && data.success) {
                                  formSubmitted = true;
                                  window.dataLayer && window.dataLayer.push({ event: 'lead_form_submit' });
                              } else {
                                  formError = data.message || 'Terjadi kesalahan. Silakan coba lagi.';
                              }
                          })
                          .catch(() => {
                              formLoading = false;
                              formError = 'Gagal mengirim pesan. Periksa koneksi internet Anda.';
                          });
                      "
                      class="bg-surface border border-surface-border rounded-2xl p-6 lg:p-8 space-y-5">

                    <h3 class="text-lg font-semibold text-white" x-text="$store.lang.isEn ? 'Send Us a Message' : 'Kirim Pesan'"></h3>

                    {{-- Name --}}
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5" x-text="$store.lang.isEn ? 'Full Name *' : 'Nama Lengkap *'"></label>
                        <input type="text" x-model="formData.name" required
                               class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-colors"
                               :placeholder="$store.lang.isEn ? 'John Doe' : 'Nama Anda'">
                    </div>

                    {{-- Email + Phone --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm text-gray-400 mb-1.5">Email *</label>
                            <input type="email" x-model="formData.email" required
                                   class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-colors"
                                   placeholder="hello@email.com">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-400 mb-1.5" x-text="$store.lang.isEn ? 'Phone / WhatsApp' : 'Telepon / WhatsApp'"></label>
                            <input type="tel" x-model="formData.phone"
                                   class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-colors"
                                   placeholder="0812-xxxx-xxxx">
                        </div>
                    </div>

                    {{-- Service Select --}}
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5" x-text="$store.lang.isEn ? 'Service Needed' : 'Layanan yang Dibutuhkan'"></label>
                        <select x-model="formData.service"
                                class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-colors">
                            <option value="" x-text="$store.lang.isEn ? '-- Select Service --' : '-- Pilih Layanan --'"></option>
                            <option value="Company Profile">Company Profile</option>
                            <option value="E-Commerce">E-Commerce</option>
                            <option value="Landing Page">Landing Page</option>
                            <option value="Custom Web App">Custom Web App</option>
                            <option value="UI/UX Design">UI/UX Design</option>
                            <option value="Maintenance & SEO">Maintenance & SEO</option>
                        </select>
                    </div>

                    {{-- Message --}}
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5" x-text="$store.lang.isEn ? 'Message *' : 'Pesan *'"></label>
                        <textarea x-model="formData.message" required rows="4"
                                  class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-colors resize-none"
                                  :placeholder="$store.lang.isEn ? 'Tell us about your project...' : 'Ceritakan tentang proyek Anda...'"></textarea>
                    </div>

                    {{-- Error Message --}}
                    <div x-show="formError" x-cloak class="p-3 bg-red-500/10 border border-red-500/30 rounded-xl">
                        <p class="text-sm text-red-400" x-text="formError"></p>
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                            :disabled="formLoading"
                            class="touch-btn cta-primary-glow w-full px-6 py-3.5 text-sm font-semibold text-white bg-brand-500 rounded-full hover:bg-brand-400 transition-all duration-200 shadow-lg shadow-brand-500/25 hover:shadow-xl hover:shadow-brand-400/30 hover:scale-[1.01] disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:scale-100">
                        <span x-show="!formLoading" x-text="$store.lang.isEn ? 'Send Message' : 'Kirim Pesan'"></span>
                        <span x-show="formLoading" x-cloak class="inline-flex items-center gap-2">
                            <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                            <span x-text="$store.lang.isEn ? 'Sending...' : 'Mengirim...'"></span>
                        </span>
                    </button>

                    <p class="text-xs text-gray-500 text-center" x-text="$store.lang.isEn ? 'Or contact us directly via WhatsApp for faster response.' : 'Atau hubungi kami langsung via WhatsApp untuk respons lebih cepat.'"></p>
                </form>
            </div>
        </div>
    </div>
</section>
