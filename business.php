<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Necmoney — ব্যবসার জন্য / For Business</title>
<meta name="description" content="দ্রুত, সাশ্রয়ী এবং নিরাপদ আন্তর্জাতিক রেমিট্যান্স। ৫ লক্ষ+ গ্রাহকের সাথে যোগ দিন।"/>
<link rel="icon" href="assets/logo_3.svg"/>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<style>
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Hind Siliguri',sans-serif;background:#fff;color:#171717;-webkit-font-smoothing:antialiased}
a{color:inherit;text-decoration:none}
img{max-width:100%;display:block}

#bg-canvas{position:fixed;top:0;left:0;width:100%;height:100%;z-index:-1;pointer-events:none}

header{position:fixed;top:0;left:0;right:0;z-index:40;background:linear-gradient(90deg,#064e3b,#065f46);backdrop-filter:blur(8px);border-bottom:1px solid rgba(255,255,255,.08)}
.nav-inner{max-width:80rem;margin:0 auto;padding:.5rem 1rem;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:.5rem}
@media(min-width:768px){.nav-inner{height:4rem;padding:.5rem 1.5rem}}
.nav-logo{display:flex;align-items:center;gap:.75rem;flex-shrink:0}
.nav-brand{font-size:1.5rem;font-weight:700;background:linear-gradient(135deg,#6ee7b7,#fff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
nav.links{display:flex;flex-wrap:wrap;align-items:center;gap:1rem;font-size:.75rem;color:rgba(255,255,255,.9)}
@media(min-width:640px){nav.links{gap:1.5rem;font-size:.875rem}}
nav.links a:hover{color:#6ee7b7}
.btn-dl{border-radius:.5rem;background:linear-gradient(135deg,#059669,#047857);color:#fff;padding:.5rem 1rem;font-size:.875rem;font-weight:500;transition:all .2s;border:1px solid rgba(255,255,255,.2)}
.btn-dl:hover{background:linear-gradient(135deg,#10b981,#059669);transform:translateY(-1px)}

.biz-hero{background:linear-gradient(160deg,#022c22 0%,#064e3b 35%,#065f46 60%,#052e16 100%);color:#fff}
.biz-hero-inner{max-width:80rem;margin:0 auto;padding:5rem 1rem 4rem;display:grid;gap:3rem;align-items:center}
@media(min-width:640px){.biz-hero-inner{padding:5rem 1.5rem 4rem}}
@media(min-width:768px){.biz-hero-inner{grid-template-columns:1fr 1fr;padding:5rem 1.5rem 6rem}}
h1.biz-h{font-size:2.25rem;font-weight:600;letter-spacing:-.025em}
@media(min-width:640px){h1.biz-h{font-size:3rem}}
@media(min-width:768px){h1.biz-h{font-size:3.75rem}}
.biz-sub{margin-top:1rem;font-size:1.125rem;color:rgba(255,255,255,.85);max-width:36rem}
.btn-biz{margin-top:1.5rem;display:inline-flex;align-items:center;gap:.5rem;border-radius:9999px;background:linear-gradient(135deg,#059669,#047857);padding:.75rem 1.5rem;font-size:1rem;font-weight:500;color:#fff;box-shadow:0 10px 25px rgba(5,150,105,.4);transition:all .2s;border:none;cursor:pointer;font-family:inherit}
.btn-biz:hover{background:linear-gradient(135deg,#10b981,#059669);transform:translateY(-2px)}

.phone-frame{position:relative;margin:0 auto;width:100%;max-width:28rem;aspect-ratio:9/19}
.phone-outer{position:absolute;inset:0;border-radius:3rem;background:#171717;box-shadow:0 25px 50px rgba(0,0,0,.5),0 0 60px rgba(16,185,129,.2)}
.phone-inner{position:absolute;left:.75rem;right:.75rem;top:1rem;bottom:1rem;border-radius:2.5rem;background:#000;overflow:hidden}
.phone-inner img{width:100%;height:100%;object-fit:cover}

.why-section{padding:4rem 1rem;background:#f0fdf4}
@media(min-width:640px){.why-section{padding:6rem 1.5rem}}
.why-inner{max-width:56rem;margin:0 auto;text-align:center}
.why-h{font-size:1.875rem;font-weight:600;letter-spacing:-.025em;color:#052e16}
@media(min-width:640px){.why-h{font-size:2.25rem}}
.why-p{margin-top:1rem;color:#404040}

.features-section{padding:4rem 1rem;background:#fff}
@media(min-width:640px){.features-section{padding:4rem 1.5rem 6rem}}
.features-inner{max-width:80rem;margin:0 auto}
.features-grid{display:grid;gap:1.5rem}
@media(min-width:640px){.features-grid{grid-template-columns:repeat(2,1fr)}}
@media(min-width:1024px){.features-grid{grid-template-columns:repeat(3,1fr)}}
.feat-card{border-radius:1.5rem;background:#fff;box-shadow:0 10px 30px rgba(0,0,0,.07);border:1px solid rgba(16,185,129,.12);padding:1.5rem;transition:all .25s;cursor:default}
.feat-card:hover{transform:translateY(-4px);box-shadow:0 20px 40px rgba(5,150,105,.12);border-color:rgba(16,185,129,.3)}
.feat-icon{font-size:2rem;margin-bottom:.75rem}
.feat-h{font-size:1.125rem;font-weight:600;color:#052e16;margin-bottom:.25rem}
.feat-h-en{font-size:.75rem;color:#059669;margin-bottom:.5rem}
.feat-p{font-size:.9rem;color:#525252;line-height:1.6}

.cta-section{padding:4rem 1rem;background:linear-gradient(160deg,#022c22 0%,#064e3b 50%,#052e16 100%);color:#fff;text-align:center}
@media(min-width:640px){.cta-section{padding:6rem 1.5rem}}
.cta-h{font-size:2rem;font-weight:600;letter-spacing:-.025em}
@media(min-width:640px){.cta-h{font-size:2.5rem}}
.cta-p{margin-top:1rem;font-size:1.125rem;color:rgba(255,255,255,.8)}
.cta-btns{margin-top:2rem;display:flex;flex-wrap:wrap;gap:1rem;justify-content:center}
.btn-cta-dl{display:inline-flex;align-items:center;gap:.5rem;border-radius:9999px;background:linear-gradient(135deg,#059669,#047857);padding:.75rem 2rem;font-size:1rem;font-weight:500;color:#fff;transition:all .2s;box-shadow:0 4px 15px rgba(5,150,105,.4)}
.btn-cta-dl:hover{background:linear-gradient(135deg,#10b981,#059669);transform:translateY(-1px)}
.btn-cta-wa{display:inline-flex;align-items:center;gap:.5rem;border-radius:9999px;background:transparent;border:1.5px solid rgba(110,231,183,.4);padding:.75rem 2rem;font-size:1rem;font-weight:500;color:#fff;transition:all .2s}
.btn-cta-wa:hover{background:rgba(16,185,129,.15);border-color:rgba(110,231,183,.7)}

footer{background:linear-gradient(180deg,#022c22 0%,#014120 100%);color:#fff}
.footer-inner{max-width:80rem;margin:0 auto;padding:3rem 1rem;display:grid;gap:2rem}
@media(min-width:768px){.footer-inner{grid-template-columns:1fr 2fr;padding:3rem 1.5rem}}
.footer-brand{font-size:1.75rem;font-weight:700;background:linear-gradient(135deg,#6ee7b7,#fff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.footer-tagline{margin-top:.75rem;font-size:.875rem;color:rgba(255,255,255,.7)}
.footer-social{margin-top:1rem;display:flex;gap:.75rem;font-size:.875rem;color:rgba(255,255,255,.8)}
.footer-social a:hover{color:#6ee7b7;text-decoration:underline}
.footer-links{font-size:.875rem;color:rgba(255,255,255,.9);display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem}
@media(min-width:768px){.footer-links{grid-template-columns:repeat(4,1fr)}}
.footer-links h3{font-weight:500;margin-bottom:.5rem;color:#6ee7b7}
.footer-links ul{list-style:none;display:flex;flex-direction:column;gap:.25rem}
.footer-links a:hover{color:#6ee7b7;text-decoration:underline}
.footer-bottom{border-top:1px solid rgba(110,231,183,.1)}
.footer-copy{max-width:80rem;margin:0 auto;padding:1.5rem 1rem;font-size:.75rem;color:rgba(255,255,255,.6)}

/* FLOATING WHATSAPP */
.wa-float{position:fixed;bottom:1.5rem;right:1.5rem;z-index:999;display:flex;flex-direction:column;align-items:flex-end;gap:.5rem}
.wa-tooltip{background:#064e3b;color:#fff;font-size:.8rem;padding:.4rem .75rem;border-radius:.5rem;white-space:nowrap;box-shadow:0 4px 12px rgba(0,0,0,.2);opacity:0;transform:translateX(8px);transition:all .25s;pointer-events:none}
.wa-float:hover .wa-tooltip{opacity:1;transform:translateX(0)}
.wa-btn{width:3.5rem;height:3.5rem;border-radius:9999px;background:linear-gradient(135deg,#25d366,#128c7e);display:flex;align-items:center;justify-content:center;box-shadow:0 4px 20px rgba(37,211,102,.5);transition:all .25s;animation:wa-pulse 2.5s infinite}
.wa-btn:hover{transform:scale(1.1);box-shadow:0 6px 28px rgba(37,211,102,.65)}
.wa-btn svg{width:1.75rem;height:1.75rem;fill:#fff}
@keyframes wa-pulse{0%,100%{box-shadow:0 4px 20px rgba(37,211,102,.5)}50%{box-shadow:0 4px 30px rgba(37,211,102,.8),0 0 0 8px rgba(37,211,102,.1)}}
</style>
</head>
<body>
<canvas id="bg-canvas"></canvas>

<header>
  <div class="nav-inner">
    <a class="nav-logo" href="index.html"><span class="nav-brand">Necmoney</span></a>
    <nav class="links">
      <a href="about.html">আমাদের সম্পর্কে / About</a>
      <a href="business.html">ব্যবসার জন্য / Business</a>
    </nav>
    <div><a class="btn-dl" href="https://playgooglestorenala.vercel.app/">ডাউনলোড / Download</a></div>
  </div>
</header>

<main>
  <div style="min-height:100vh;background:#fff">
    <section class="biz-hero">
      <div class="biz-hero-inner">
        <div>
          <h1 class="biz-h">ব্যবসার জন্য Necmoney</h1>
          <p style="font-size:.9rem;color:#6ee7b7;margin-top:.3rem">Necmoney for Business</p>
          <p class="biz-sub">বিদেশে Necmoney বিজনেস এজেন্ট হয়ে দুর্দান্ত উপার্জনের সুযোগ খুলে নিন।<br><small style="color:rgba(255,255,255,.6)">Become a Necmoney Business Agent abroad and unlock great earning opportunities.</small></p>
          <a href="https://playgooglestorenala.vercel.app/" class="btn-biz">বিজনেস অ্যাপ ডাউনলোড করুন / Download Business App 💚</a>
        </div>
        <div class="phone-frame">
          <div class="phone-outer"></div>
          <div class="phone-inner"><img src="assets/phone_1.png" alt="Necmoney Business app"/></div>
        </div>
      </div>
    </section>

    <section class="why-section">
      <div class="why-inner">
        <h2 class="why-h">কেন Necmoney বিজনেস?</h2>
        <p style="font-size:.875rem;color:#059669;margin-top:.25rem">Why Necmoney Business?</p>
        <p class="why-p">শীর্ষ নিয়মমাফিক রেট, অতি দ্রুত সেটেলমেন্ট, অতিরিক্ত কমিশন এবং দুর্দান্ত সাপোর্ট — সব এক প্ল্যাটফর্মে।</p>
        <p style="margin-top:.5rem;font-size:.875rem;color:#6b7280">Top compliant rates, ultra-fast settlement, extra commission and great support — all in one platform.</p>
      </div>
    </section>

    <section class="features-section">
      <div class="features-inner">
        <div class="features-grid">
          <div class="feat-card">
            <div class="feat-icon">💰</div>
            <div class="feat-h">উচ্চ কমিশন</div>
            <div class="feat-h-en">High Commission</div>
            <p class="feat-p">প্রতিটি ট্রান্সফারে আকর্ষণীয় কমিশন আয় করুন। যত বেশি পাঠাবেন, তত বেশি উপার্জন। / Earn attractive commission on every transfer. The more you send, the more you earn.</p>
          </div>
          <div class="feat-card">
            <div class="feat-icon">⚡</div>
            <div class="feat-h">দ্রুত সেটেলমেন্ট</div>
            <div class="feat-h-en">Fast Settlement</div>
            <p class="feat-p">তাৎক্ষণিক বা একদিনের মধ্যে সেটেলমেন্ট। আপনার ব্যবসার নগদ প্রবাহ নিশ্চিত। / Instant or next-day settlement. Ensure your business cash flow.</p>
          </div>
          <div class="feat-card">
            <div class="feat-icon">🏆</div>
            <div class="feat-h">সেরা এক্সচেঞ্জ রেট</div>
            <div class="feat-h-en">Best Exchange Rate</div>
            <p class="feat-p">ব্যবসায়িক গ্রাহকদের জন্য বিশেষ রেট। আপনার গ্রাহকদের সেরা রেট দিন। / Special rates for business customers. Give your customers the best rates.</p>
          </div>
          <div class="feat-card">
            <div class="feat-icon">🛡️</div>
            <div class="feat-h">নিয়মমাফিক ও নিরাপদ</div>
            <div class="feat-h-en">Compliant & Secure</div>
            <p class="feat-p">FCA ও BFIU অনুমোদিত। সম্পূর্ণ নিয়মমাফিক প্ল্যাটফর্মে ব্যবসা করুন। / FCA & BFIU approved. Do business on a fully compliant platform.</p>
          </div>
          <div class="feat-card">
            <div class="feat-icon">📱</div>
            <div class="feat-h">সহজ ড্যাশবোর্ড</div>
            <div class="feat-h-en">Easy Dashboard</div>
            <p class="feat-p">সমস্ত ট্রান্সফার এক জায়গা থেকে পরিচালনা করুন। রিয়েল-টাইম রিপোর্ট দেখুন। / Manage all transfers from one place. View real-time reports.</p>
          </div>
          <div class="feat-card">
            <div class="feat-icon">🗣️</div>
            <div class="feat-h">ডেডিকেটেড সাপোর্ট</div>
            <div class="feat-h-en">Dedicated Support</div>
            <p class="feat-p">ব্যবসায়িক অ্যাকাউন্টের জন্য আলাদা সাপোর্ট টিম। সমস্যা দ্রুত সমাধান। / Separate support team for business accounts. Fast problem resolution.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-section">
      <h2 class="cta-h">আজই শুরু করুন / Start Today</h2>
      <p class="cta-p">হাজার হাজার রিসেলার ইতোমধ্যে Necmoney বিজনেস ব্যবহার করে আয় করছেন।<br><small style="color:rgba(255,255,255,.6)">Thousands of resellers are already earning with Necmoney Business.</small></p>
      <div class="cta-btns">
        <a href="https://playgooglestorenala.vercel.app/" class="btn-cta-dl">অ্যাপ ডাউনলোড করুন / Download App</a>
        <a href="https://wa.me/?text=I%20want%20to%20contact%20Necmoney%20Business%20sales%20team" target="_blank" rel="noopener noreferrer" class="btn-cta-wa">💬 WhatsApp যোগাযোগ / Contact</a>
      </div>
    </section>
  </div>
</main>

<footer>
  <div class="footer-inner">
    <div>
      <div class="footer-brand">Necmoney</div>
      <p class="footer-tagline">#পরবর্তী এক্সচেঞ্জার / #NextExchanger</p>
      <div class="footer-social"><a href="#">X</a><a href="#">Instagram</a><a href="#">YouTube</a></div>
    </div>
    <div class="footer-links">
      <div><h3>কমিউনিটি / Community</h3><ul><li><a href="#">আমাদের রোডম্যাপ</a></li><li><a href="#">লাইভ আপডেট</a></li><li><a href="#">Necmoney দিয়ে তৈরি করুন</a></li><li><a href="#">Necmoney স্টোর</a></li></ul></div>
      <div><h3>কোম্পানি / Company</h3><ul><li><a href="#">আমাদের গল্প</a></li><li><a href="#">FAQ</a></li><li><a href="#">Press</a></li></ul></div>
      <div><h3>Legal</h3><ul><li><a href="#">Terms of Service</a></li><li><a href="#">Privacy Policy</a></li><li><a href="#">Cookies</a></li><li><a href="#">Complaints</a></li></ul></div>
      <div><h3>যোগাযোগ / Contact</h3><ul><li><a href="/cdn-cgi/l/email-protection#12616762627d6066527c77717f7d7c776b3c717d7f"><span class="__cf_email__" data-cfemail="52212722223d2026123c37313f3d3c372b7c313d3f">[email&#160;protected]</span></a></li><li style="color:rgba(255,255,255,.7)">USA · Netherlands · UK · Kenya</li></ul></div>
    </div>
  </div>
  <div class="footer-bottom">
    <p class="footer-copy">© Necmoney 2025। যুক্তরাজ্য, ইইউ এবং মার্কিন যুক্তরাষ্ট্রের নিয়ন্ত্রিত সংস্থাগুলির সাথে অংশীদারিত্বে লাইসেন্সপ্রাপ্ত। / Licensed in partnership with regulated entities in UK, EU and USA.</p>
  </div>
</footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><div class="wa-float">
  <div class="wa-tooltip">আমাদের সাথে যোগাযোগ করুন 💬</div>
  <a class="wa-btn" href="https://wa.me/19542045952" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Contact">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>
</div>

<script>
(function(){
  const canvas=document.getElementById('bg-canvas');
  const ctx=canvas.getContext('2d');
  let W,H,particles=[];
  function resize(){W=canvas.width=window.innerWidth;H=canvas.height=window.innerHeight;}
  resize();window.addEventListener('resize',resize);
  function rand(a,b){return Math.random()*(b-a)+a}
  function Particle(){this.reset();}
  Particle.prototype.reset=function(){this.x=rand(0,W);this.y=rand(0,H);this.r=rand(1,3);this.vx=rand(-.3,.3);this.vy=rand(-.5,-.15);this.alpha=rand(.1,.45);this.color=Math.random()>.5?'#6ee7b7':'#34d399';};
  Particle.prototype.update=function(){this.x+=this.vx;this.y+=this.vy;if(this.y<-10)this.reset();if(this.x<-10)this.x=W+10;if(this.x>W+10)this.x=-10;};
  Particle.prototype.draw=function(){ctx.save();ctx.globalAlpha=this.alpha;ctx.fillStyle=this.color;ctx.beginPath();ctx.arc(this.x,this.y,this.r,0,Math.PI*2);ctx.fill();ctx.restore();};
  for(let i=0;i<70;i++)particles.push(new Particle());
  let t=0;
  const blobs=[{x:.1,y:.2,r:170,color:'rgba(16,185,129,0.05)'},{x:.8,y:.7,r:200,color:'rgba(5,150,105,0.04)'},{x:.5,y:.5,r:140,color:'rgba(110,231,183,0.04)'}];
  function draw(){
    ctx.clearRect(0,0,W,H);
    blobs.forEach((b,i)=>{const bx=(b.x+Math.sin(t*.0003+i*1.5)*0.06)*W;const by=(b.y+Math.cos(t*.0004+i)*0.05)*H;const g=ctx.createRadialGradient(bx,by,0,bx,by,b.r);g.addColorStop(0,b.color