<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_26514cf39438ab9d3a7e00d3034ad8ca extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Benvenuto — Dispensa";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/main.min.css\">

    <style>
      .fc-event .fc-event-title,
      .fc-event .fc-title,
      .fc-daygrid-event .fc-event-title,
      .fc-timegrid-event .fc-event-title,
      .fc-list-event .fc-event-title {
        text-shadow:
          -1px -1px 0 rgba(0,0,0,0.75),
           1px -1px 0 rgba(0,0,0,0.75),
          -1px  1px 0 rgba(0,0,0,0.75),
           1px  1px 0 rgba(0,0,0,0.75);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      .fc-event, .fc-event * { overflow: visible !important; }
      .fc-event .fc-event-title, .fc-event .fc-title { line-height: 1.15; }

      .fc-event .fc-event-title .emoji-char,
      .fc-event .fc-title .emoji-char {
        text-shadow: none !important;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        line-height: 1;
        vertical-align: middle;
        font-size: 1.05em;
        transform: translateY(-6%);
        padding: 0 0.08rem;
      }

      .extras-bubbles { display:flex; gap:6px; margin-top:6px; flex-wrap:nowrap; align-items:center; padding-left:4px; z-index:500; position:relative;}
      .extras-bubble {
        width:22px; height:22px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center;
        font-size:12px; color: #fff; border:1px solid rgba(0,0,0,0.12); box-shadow:0 1px 0 rgba(255,255,255,0.06) inset;
        cursor:default;
      }
      .extras-more { box-sizing: border-box; font-weight:700; font-size:12px; }

      .fc-daygrid-day-frame {
        display:flex;
        flex-direction:column;
        min-height:60px;
        overflow: visible !important; 
        position: relative;
        /* keep a small fallback padding-bottom; JS will dynamically adjust when needed */
        padding-bottom: 6px;
      }
      .fc-daygrid-day-events { order: 0; } 
      .extras-bubbles { order: 1; }   

      .warn-badge-event {
          position: absolute;
          right: 0px;                 
          top: 50%;
          transform: translateY(-50%);
          display: inline-flex;
          align-items: center;
          justify-content: center;
          font-size: 16px;            
          line-height: 1;
          color: #ffffff;             
          background: transparent !important;   
          width: auto;
          height: auto;
          padding-bottom: 5px;                 
          border-radius: 0;
          box-shadow: none;
          z-index: 9999;
          pointer-events: none;
          text-shadow:
            -1px -1px 0 rgba(0,0,0,0.85),
             1px -1px 0 rgba(0,0,0,0.85),
            -1px  1px 0 rgba(0,0,0,0.85),
             1px  1px 0 rgba(0,0,0,0.85); 
      }

      .warn-badge-event.warn-stage-3 { animation: none; opacity: 0.95; }
      .warn-badge-event.warn-stage-2 { animation: warn-rotate-slow 1.6s linear infinite; }
      .warn-badge-event.warn-stage-1 { animation: warn-rotate-fast 0.9s linear infinite; }
      .warn-badge-event.warn-stage-0 { animation: warn-pulse 0.7s ease-in-out infinite; }

      .warn-badge-event[style*=\"animation: none\"],
      .warn-badge-event.warn-static {
        animation: none !important;
      }

      @keyframes warn-rotate-slow {
        0% { transform: translateY(-50%) rotate(-6deg); }
        50% { transform: translateY(-50%) rotate(6deg); }
        100% { transform: translateY(-50%) rotate(-6deg); }
      }
      @keyframes warn-rotate-fast {
        0% { transform: translateY(-50%) rotate(-8deg); }
        50% { transform: translateY(-50%) rotate(8deg); }
        100% { transform: translateY(-50%) rotate(-8deg); }
      }
      @keyframes warn-pulse {
        0% { transform: translateY(-50%) scale(1); }
        50% { transform: translateY(-50%) scale(1.18); }
        100% { transform: translateY(-50%) scale(1); }
      }

      .fc-event, .fc-event * { overflow: visible !important; }

      .expired-bubble {
        opacity: 1;
      }
      .fc-daygrid-day .fc-daygrid-day-frame,
      .fc-daygrid-day {
        overflow: visible !important;
      }
      .hidden-event-line { display:none !important; }

\t.fc-event, .fc-daygrid-event, .fc-timegrid-event, .fc-list-event { cursor: pointer !important; }

    </style>
";
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 129
        yield "<div class=\"row\">
    <div class=\"col-12 mb-4 text-center\">
        <h1>Benvenuto nella Dispensa</h1>
        <p class=\"lead\">Calendario scadenze e prodotti</p>
    </div>
</div>

<div id=\"calendar\" style=\"max-width:1000px;margin:0 auto;height:650px;\"></div>

<div class=\"modal fade\" id=\"modalNewProduct\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Nuovo prodotto</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Chiudi\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"modalNewProductBody\">
          <div class=\"text-center py-3\">
            <div class=\"spinner-border\" role=\"status\"><span class=\"visually-hidden\">Caricamento...</span></div>
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
\t  
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annulla</button>
      </div>
    </div>
  </div>
</div>

<script>
  window.__newProductUrl = '";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_new");
        yield "';
</script>

<div class=\"modal fade\" id=\"modalShowProduct\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Prodotto</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Chiudi\"></button>
      </div>
      <div class=\"modal-body\" id=\"modalShowProductBody\">
        <div class=\"text-center py-3\">
          <div class=\"spinner-border\" role=\"status\"><span class=\"visually-hidden\">Caricamento...</span></div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Chiudi</button>
      </div>
    </div>
  </div>
</div>

<script>
\twindow.__showProductUrlTemplate = '";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_fragment", ["id" => 0]), "js"), "html", null, true);
        yield "';
</script>


";
        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 191
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
    (function(){
        const PRIMARY_JS = 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js';
        const FALLBACK_JS = 'https://unpkg.com/fullcalendar@6.1.19/index.global.min.js';
        const EVENTS_URL = '";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_calendar_events");
        yield "';

        function loadScript(src) {
            return new Promise(function(resolve, reject){
                const existing = document.querySelector('script[src=\"'+src+'\"]');
                if (existing) {
                    if (window.FullCalendar) return resolve();
                    existing.addEventListener('load', () => resolve());
                    existing.addEventListener('error', () => reject(new Error('script load error')));
                    return;
                }
                const s = document.createElement('script');
                s.src = src;
                s.async = false;
                s.defer = false;
                s.onload = () => resolve();
                s.onerror = () => reject(new Error('script load error: ' + src));
                document.body.appendChild(s);
            });
        }

        function wrapEmojisInHtml(str) {
          if (!str) return str;
          return str.replace(/(\\p{Extended_Pictographic}(?:\\uFE0F|\\u200D\\p{Extended_Pictographic})*)/gu, '<span class=\"emoji-char\">\$1</span>');
        }

        function parseDateSafe(s, fallbackDate = null) {
          if (!s) return fallbackDate;
          try {
            const d = new Date(s);
            if (isNaN(d)) return fallbackDate;
            return d;
          } catch (e) {
            return fallbackDate;
          }
        }

        function getEventScadenzaDateObj(ev) {
          const extSc = ev.extendedProps && ev.extendedProps.scadenza ? ev.extendedProps.scadenza : null;
          if (extSc) {
            const d = parseDateSafe(extSc);
            if (d) { d.setHours(0,0,0,0); return d; }
          }
          const endVal = ev.end ? ev.end : (ev.endStr ? ev.endStr : null);
          if (endVal) {
            const de = (endVal instanceof Date) ? new Date(endVal) : parseDateSafe(endVal);
            if (de) { de.setDate(de.getDate() - 1); de.setHours(0,0,0,0); return de; }
          }
          const startVal = ev.start ? ev.start : (ev.startStr ? ev.startStr : null);
          if (startVal) {
            const ds = (startVal instanceof Date) ? new Date(startVal) : parseDateSafe(startVal);
            if (ds) { ds.setHours(0,0,0,0); return ds; }
          }
          return null;
        }

        function daysBetween(a, b) {
          const msPerDay = 24 * 60 * 60 * 1000;
          const az = new Date(a); az.setHours(0,0,0,0);
          const bz = new Date(b); bz.setHours(0,0,0,0);
          return Math.round((bz - az) / msPerDay);
        }

        function isoDateYMD(d) {
          if (!d) return null;
          const dt = (d instanceof Date) ? d : new Date(d);
          if (isNaN(dt)) return null;
          const y = dt.getFullYear();
          const m = String(dt.getMonth() + 1).padStart(2, '0');
          const day = String(dt.getDate()).padStart(2, '0');
          return `\${y}-\${m}-\${day}`;
        }

        function firstEmojiFromString(s) {
          if (!s) return null;
          try {
            const m = s.match(/(\\p{Extended_Pictographic}(?:\\uFE0F|\\u200D\\p{Extended_Pictographic})*)/u);
            return m ? m[0] : null;
          } catch(e) { return null; }
        }

function resolveProductIdForExtra(p) {
  if (!p) return null;

  const candFieldsFirst = ['prodottoId','productId','prodotto_id','product_id'];
  for (const f of candFieldsFirst) {
    if (p[f] !== undefined && p[f] !== null && String(p[f]).trim() !== '') {
      return String(p[f]);
    }
  }

  const extractDigits = (v) => {
    if (v === undefined || v === null) return null;
    const s = String(v);
    const m = s.match(/(\\d+)/);
    return m ? m[0] : null;
  };

  const candDigits = extractDigits(p.id) || extractDigits(p.stockEntryId) || extractDigits(p.stock_entry_id) || extractDigits(p.stockId);

  try {
    if (window.__fullcalendar_instance && typeof window.__fullcalendar_instance.getEvents === 'function') {
      const evs = window.__fullcalendar_instance.getEvents();

      for (const ev of evs) {
        const ep = ev.extendedProps || {};
        if (ep.prodottoId && (String(ep.prodottoId) === String(p.prodottoId) || String(ep.prodottoId) === String(candDigits))) {
          return String(ep.prodottoId);
        }
      }

      for (const ev of evs) {
        const ep = ev.extendedProps || {};
        if (ep.stockEntryId && (String(ep.stockEntryId) === String(p.stockEntryId) || String(ep.stockEntryId) === String(candDigits))) {
          if (ep.prodottoId) return String(ep.prodottoId);
          const m = String(ev.id || '').match(/(\\d+)/);
          if (m) return m[0];
        }
      }

      for (const ev of evs) {
        if (String(ev.id) === String(p.id)) {
          const ep = ev.extendedProps || {};
          if (ep.prodottoId) return String(ep.prodottoId);
          const m = String(ev.id || '').match(/(\\d+)/);
          if (m) return m[0];
        }
      }

      const needle = String(p.nome || p.title || p.name || '').toLowerCase().trim();
      if (needle) {
        for (const ev of evs) {
          const title = String(ev.title || (ev._def && ev._def.title) || '').toLowerCase();
          if (title && title.includes(needle)) {
            const ep = ev.extendedProps || {};
            if (ep.prodottoId) return String(ep.prodottoId);
            const m = String(ev.id || '').match(/(\\d+)/);
            if (m) return m[0];
          }
        }
      }
    }
  } catch (e) {
    console.warn('resolveProductIdForExtra calendar lookup error', e);
  }

  if (candDigits) return candDigits;

  return null;
}

function attachBubbleClickHandler(b, p) {
  if (!b) return;
  b.style.pointerEvents = 'auto';
  b.style.cursor = 'pointer';
  b.addEventListener('click', function (e) {
    e.stopPropagation();
    try {
      const resolved = resolveProductIdForExtra(p);
      if (resolved) {
        openProductShowModalById(resolved);
      } else {
        console.warn('[pantry] resolveProductIdForExtra failed for bubble', p);
        showTemporaryAlert('Impossibile aprire il prodotto: id non risolvibile', 'warning', 2500);
      }
    } catch (err) {
      console.error('bubble click error', err);
      showTemporaryAlert('Errore interno durante apertura prodotto', 'danger', 3000);
    }
  });
}


        async function init() {
            try {
                try {
                    await loadScript(PRIMARY_JS);
                } catch (e) {
                    console.warn('Primary CDN failed, trying fallback:', e);
                    await loadScript(FALLBACK_JS);
                }

                if (typeof FullCalendar === 'undefined') {
                    throw new Error('FullCalendar non caricato correttamente.');
                }

                const calendarEl = document.getElementById('calendar');
                if (!calendarEl) throw new Error('#calendar non trovato');

                const resp = await fetch(EVENTS_URL, { headers: { 'Accept': 'application/json' }});
                if (!resp.ok) throw new Error('API eventi risposta: ' + resp.status);

                const data = await resp.json();
                let events = Array.isArray(data) ? data : (data.events || []);
                let extrasByDate = (!Array.isArray(data) && data.extrasByDate) ? data.extrasByDate : {};

\t\t\t\tevents = events.map(ev => {
\t\t\t\t  ev.extendedProps = ev.extendedProps || {};
\t\t\t\t  if (!ev.extendedProps.scadenza) {
\t\t\t\t\tev.extendedProps.scadenza = ev.extendedProps.scadenza || ev.start || null;
\t\t\t\t  }
\t\t\t\t  ev.extendedProps.createdAt = ev.extendedProps.createdAt || null;
\t\t\t\t  return ev;
\t\t\t\t});

(function classifyEventsToLinesAndBubbles(){
  const today = new Date(); today.setHours(0,0,0,0);

  function keyOf(evOrExtra) {
    if (!evOrExtra) return '';
    if (evOrExtra.extendedProps) {
      const ep = evOrExtra.extendedProps;
      if (ep.stockEntryId) return String(ep.stockEntryId);
      if (ep.prodottoId) return String(ep.prodottoId);
    }
    if (evOrExtra.stockEntryId) return String(evOrExtra.stockEntryId);
    if (evOrExtra.prodottoId) return String(evOrExtra.prodottoId);
    if (evOrExtra.id) {
      const m = String(evOrExtra.id).match(/\\d+/);
      return m ? m[0] : String(evOrExtra.id);
    }
    return '';
  }

  const annotated = (events || []).map((ev, idx) => {
    const sc = getEventScadenzaDateObj(ev);
    const daysTo = sc ? daysBetween(today, sc) : 99999;
    let createdAt = null;
    try {
      const caRaw = ev && ev.extendedProps && ev.extendedProps.createdAt ? ev.extendedProps.createdAt : null;
      if (caRaw) { const parsed = parseDateSafe(caRaw); if (parsed) { parsed.setHours(0,0,0,0); createdAt = parsed; } }
    } catch(e){}
    return { ev, sc, daysTo, createdAt, key: keyOf(ev), sourceIndex: idx, sourceType: 'event' };
  });

  if (extrasByDate && typeof extrasByDate === 'object') {
    for (const [dateKey, arr] of Object.entries(extrasByDate)) {
      if (!Array.isArray(arr)) continue;
      for (const x of arr) {
        const k = keyOf(x);
        if (annotated.some(a => a.key && k && a.key === k)) continue;
        let sc = null;
        if (x.scadenza) sc = parseDateSafe(x.scadenza);
        if (!sc) sc = parseDateSafe(dateKey);
        if (sc) sc.setHours(0,0,0,0);
        const daysTo = sc ? daysBetween(today, sc) : 99999;
        let createdAt = null;
        try { if (x.createdAt) { const p = parseDateSafe(x.createdAt); if (p) { p.setHours(0,0,0,0); createdAt = p; } } } catch(e){}
        const synthetic = {
          id: 'extra-' + (x.stockEntryId || x.id || Math.random().toString(36).slice(2,8)),
          title: (x.emoji ? (x.emoji + ' ') : '') + (x.nome || ('Prodotto ' + (x.stockEntryId || x.id || ''))),
          start: sc ? isoDateYMD(sc) : (dateKey || null),
          end: sc ? isoDateYMD(new Date(sc.getTime()+24*60*60*1000)) : null,
          allDay: true,
          extendedProps: {
            stockEntryId: x.stockEntryId || x.id || null,
            prodottoId: x.prodottoId || null,
            scadenza: x.scadenza || dateKey || null,
            createdAt: x.createdAt || null,
            emoji: x.emoji || null,
            color: x.color || null,
            nome: x.nome || null
          }
        };
        annotated.push({ ev: synthetic, sc, daysTo, createdAt, key: k || keyOf(synthetic), sourceIndex: 99999, sourceType: 'extra' });
      }
    }
  }

  const forcedBubbles = annotated.filter(a => a.daysTo <= -2);
  const yesterdayItems = annotated.filter(a => a.daysTo === -1);
  const candidates = annotated.filter(a => a.daysTo > -1);

  candidates.sort((A,B)=>{
    const aTime = A.sc ? A.sc.getTime() : 9e15;
    const bTime = B.sc ? B.sc.getTime() : 9e15;
    if (aTime !== bTime) return aTime - bTime;
    const aCA = A.createdAt ? A.createdAt.getTime() : null;
    const bCA = B.createdAt ? B.createdAt.getTime() : null;
    if (aCA !== null && bCA !== null) { if (aCA !== bCA) return aCA - bCA; }
    else if (aCA !== null) return -1;
    else if (bCA !== null) return 1;
    if ((A.sourceIndex || 0) !== (B.sourceIndex || 0)) return (A.sourceIndex || 0) - (B.sourceIndex || 0);
    const ak = A.key || (A.ev && (A.ev.id||'')) || '';
    const bk = B.key || (B.ev && (B.ev.id||'')) || '';
    if (ak < bk) return -1;
    if (ak > bk) return 1;
    return 0;
  });

  const MAX_LINES = 3;
  const top = candidates.slice(0, MAX_LINES);
  const rest = candidates.slice(MAX_LINES);

events = top.map(x => {
  const sc = x.sc || (x.ev && getEventScadenzaDateObj(x.ev)) || null;
  const ep = (x.ev && x.ev.extendedProps) ? Object.assign({}, x.ev.extendedProps) : {};
  let createdAtObj = null;
  try {
    if (x.createdAt) {
      createdAtObj = (x.createdAt instanceof Date) ? new Date(x.createdAt) : parseDateSafe(x.createdAt);
    }
    if (!createdAtObj && ep && ep.createdAt) {
      createdAtObj = parseDateSafe(ep.createdAt);
    }
    if (createdAtObj) createdAtObj.setHours(0,0,0,0);
  } catch(e){ createdAtObj = null; }
  if (createdAtObj && sc && createdAtObj.getTime() > sc.getTime()) {
    createdAtObj = sc;
  }
  let startIso = null;
  if (createdAtObj) startIso = isoDateYMD(createdAtObj);
  else if (sc) startIso = isoDateYMD(sc);
  else if (x.ev && x.ev.start) startIso = (typeof x.ev.start === 'string') ? x.ev.start : isoDateYMD(x.ev.start);
  let endIso = null;
  if (sc) endIso = isoDateYMD(new Date(sc.getTime() + 24*60*60*1000));
  else if (x.ev && x.ev.end) endIso = (typeof x.ev.end === 'string') ? x.ev.end : isoDateYMD(x.ev.end);
  const titleFrom = ep.nome || (x.ev && x.ev.title) || '';
  const emoji = ep.emoji || firstEmojiFromString(x.ev && x.ev.title) || '';
  const color = ep.color || (x.ev && x.ev.backgroundColor) || '#999';
  const id = (x.ev && x.ev.id) ? x.ev.id : ('stock-' + (ep.stockEntryId || ep.prodottoId || Math.random().toString(36).slice(2,8)));
  return {
    id: id,
    title: (emoji ? (emoji + ' ') : '') + titleFrom,
    start: startIso,
    end: endIso,
    allDay: true,
    backgroundColor: color,
    borderColor: color,
    extendedProps: ep
  };
});


if (Array.isArray(yesterdayItems) && yesterdayItems.length) {
  yesterdayItems.forEach(y => {
    try {
      if (!y || !y.ev) return;

      const sc = y.sc || (y.ev && getEventScadenzaDateObj(y.ev)) || null;
      const ep = (y.ev && y.ev.extendedProps) ? Object.assign({}, y.ev.extendedProps) : {};

      let createdAtObj = null;
      try {
        if (y.createdAt) createdAtObj = (y.createdAt instanceof Date) ? new Date(y.createdAt) : parseDateSafe(y.createdAt);
        if (!createdAtObj && ep && ep.createdAt) createdAtObj = parseDateSafe(ep.createdAt);
        if (createdAtObj) createdAtObj.setHours(0,0,0,0);
      } catch(e){ createdAtObj = null; }

      if (createdAtObj && sc && createdAtObj.getTime() > sc.getTime()) {
        createdAtObj = sc;
      }

      let startIso = null;
      if (createdAtObj) startIso = isoDateYMD(createdAtObj);
      else if (sc) startIso = isoDateYMD(sc);
      else if (y.ev && y.ev.start) startIso = (typeof y.ev.start === 'string') ? y.ev.start : isoDateYMD(y.ev.start);

      let endIso = null;
      if (sc) endIso = isoDateYMD(new Date(sc.getTime() + 24*60*60*1000));
      else if (y.ev && y.ev.end) endIso = (typeof y.ev.end === 'string') ? y.ev.end : isoDateYMD(y.ev.end);

      const titleFrom = ep.nome || (y.ev && y.ev.title) || '';
      const emoji = ep.emoji || firstEmojiFromString(y.ev && y.ev.title) || '';
      const color = ep.color || (y.ev && y.ev.backgroundColor) || '#999';
      const id = (y.ev && y.ev.id) ? y.ev.id : ('stock-' + (ep.stockEntryId || ep.prodottoId || Math.random().toString(36).slice(2,8)));

      const canonical = {
        id: id,
        title: (emoji ? (emoji + ' ') : '') + titleFrom,
        start: startIso,
        end: endIso,
        allDay: true,
        backgroundColor: color,
        borderColor: color,
        extendedProps: ep
      };

      events.push(canonical);
    } catch(e){
    }
  });
}


  const newExtras = {};
  const pushToExtras = (item, expired=false) => {
    const sc = item.sc || (item.ev && getEventScadenzaDateObj(item.ev)) || null;
    const dateKey = isoDateYMD(sc || (item.ev && (item.ev.start || (item.ev.extendedProps && item.ev.extendedProps.scadenza))) || null);
    if (!dateKey) return;
    if (!Array.isArray(newExtras[dateKey])) newExtras[dateKey] = [];
    const ep = (item.ev && item.ev.extendedProps) ? item.ev.extendedProps : {};
    const color = ep.color || item.ev && item.ev.backgroundColor || '#999';
    const emoji = ep.emoji || firstEmojiFromString(item.ev && item.ev.title) || '•';
    const nome = ep.nome || (item.ev && item.ev.title) || '';
    const idFor = ep.prodottoId || ep.stockEntryId || (item.ev && item.ev.id) || null;
    newExtras[dateKey].push({ id: idFor, stockEntryId: idFor, emoji: expired ? '✖️' : emoji, color, createdAt: ep.createdAt || null, scadenza: dateKey, nome: nome, _expired: !!expired });
  };

  forcedBubbles.forEach(i => pushToExtras(i, true));
  rest.forEach(i => pushToExtras(i, false));

  extrasByDate = newExtras;

  window.__pantry_classified = { eventsCount: events.length, extrasByDateKeys: Object.keys(extrasByDate).length };
  window.__pantry_debug = {
    annotated: annotated.map(a => ({ key: a.key, sourceType: a.sourceType, scadenza: a.sc ? isoDateYMD(a.sc) : null, daysTo: a.daysTo, createdAt: a.createdAt ? isoDateYMD(a.createdAt) : null, title: a.ev && (a.ev.extendedProps && a.ev.extendedProps.nome ? a.ev.extendedProps.nome : a.ev.title || '') })),
    top: top.map(t => ({ key: t.key, sc: t.sc ? isoDateYMD(t.sc) : null, daysTo: t.daysTo })),
    extrasKeys: Object.keys(extrasByDate)
  };


})();

                if (window.__pantry_extrasByDate) {
                  extrasByDate = window.__pantry_extrasByDate;
                  delete window.__pantry_extrasByDate;
                }

                let eventsToRemove = new Set();
                let eventElsToRemove = [];

                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: { left: 'newProduct', center: 'title', right: 'prev,next dayGridMonth,dayGridWeek' },
                    events: events,
                    eventDisplay: 'block',
                    displayEventTime: false,
                    height: 'auto',
                    firstDay: 1,
                    locale: 'it',
\t\t\t\t\teventClick: function(info) {
\t\t\t\t\t  try {
\t\t\t\t\t\tinfo.jsEvent && info.jsEvent.preventDefault && info.jsEvent.preventDefault();
\t\t\t\t\t\tconst ep = (info.event && info.event.extendedProps) ? info.event.extendedProps : {};
\t\t\t\t\t\tlet pid = ep.prodottoId || ep.productId || ep.prodotto_id || null;
\t\t\t\t\t\tif (!pid) {
\t\t\t\t\t\t  const idCandidate = String(info.event.id || '');
\t\t\t\t\t\t  const m = idCandidate.match(/(\\d+)/);
\t\t\t\t\t\t  if (m) pid = m[0];
\t\t\t\t\t\t}
\t\t\t\t\t\tif (pid) {
\t\t\t\t\t\t  openProductShowModalById(pid);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t  console.warn('eventClick: non ho trovato prodottoId per evento', info.event);
\t\t\t\t\t\t}
\t\t\t\t\t  } catch (e) {
\t\t\t\t\t\tconsole.warn('eventClick handler error', e);
\t\t\t\t\t  }
\t\t\t\t\t},


\t\t\t\t\tcustomButtons: {
\t\t\t\t\t  newProduct: {
\t\t\t\t\t\ttext: 'Crea nuovo prodotto',
\t\t\t\t\t\tclick: function() {
\t\t\t\t\t\t  openNewProductModal();
\t\t\t\t\t\t}
\t\t\t\t\t  }
\t\t\t\t\t},\t\t\t\t\t
\t\t\t\t\t
                    eventOrder: function(a, b) {
                      const da = getEventScadenzaDateObj(a) || new Date(8640000000000000);
                      const db = getEventScadenzaDateObj(b) || new Date(8640000000000000);
                      if (da.getTime() !== db.getTime()) return da - db;
                      const ca = a.extendedProps && a.extendedProps.createdAt ? parseDateSafe(a.extendedProps.createdAt, null) : null;
                      const cb = b.extendedProps && b.extendedProps.createdAt ? parseDateSafe(b.extendedProps.createdAt, null) : null;
                      if (ca && cb) return ca - cb;
                      try {
                        if (a.id && b.id) return (a.id > b.id) ? 1 : -1;
                      } catch(e){}
                      return 0;
                    },

                    eventDidMount: function(info) {
                        const titleEl = info.el.querySelector('.fc-event-title') || info.el.querySelector('.fc-title') || info.el;
                        if (titleEl) {
                          const raw = (titleEl.textContent || titleEl.innerText || '').trim();
                          try {
                            if (raw && /\\p{Extended_Pictographic}/u.test(raw)) {
                              titleEl.innerHTML = wrapEmojisInHtml(raw);
                            }
                          } catch (e) {}
                        }

                        try {
                          const existing = info.el.querySelector('.warn-badge-event');
                          if (existing) existing.remove();

                          const sc = getEventScadenzaDateObj(info.event);
                          if (!sc) return;
                          const today = new Date(); today.setHours(0,0,0,0);
                          const daysTo = daysBetween(today, sc);
                          if (daysTo > 3) return;

                          if (daysTo < 0) {
                            if (daysTo === -1) {
                              const badge = document.createElement('div');
                              badge.className = 'warn-badge-event warn-static';
                              badge.style.animation = 'none';
                              badge.textContent = '✖';
                              badge.title = 'Scaduto da 1 giorno';
                              badge.setAttribute('data-warn-id', 'warn-' + (info.event.id || Math.random().toString(36).slice(2,8)));
                              info.el.appendChild(badge);
                              const evWidth = info.el.offsetWidth;
                              if (evWidth < 48) {
                                badge.style.top = '-6px';
                                badge.style.right = '0px';
                              }
                              return;
                            }
                            try {
                              const date = isoDateYMD(sc);
                              const dayCell = calendarEl.querySelector('[data-date=\"'+date+'\"]');
                              if (dayCell) {
                                let container = dayCell.querySelector('.extras-bubbles');
                                if (!container) {
                                  container = document.createElement('div');
                                  container.className = 'extras-bubbles';
                                  const frame = dayCell.querySelector('.fc-daygrid-day-frame') || dayCell;
                                  frame.appendChild(container);
                                }
                                const b = document.createElement('div');
                                b.className = 'extras-bubble expired-bubble';
                                b.textContent = '✖️';
                                b.title = info.event.title || 'Prodotto scaduto';
                                const bg = (info.event.extendedProps && info.event.extendedProps.color) ? info.event.extendedProps.color : '#999';
                                b.style.backgroundColor = bg;
                                container.appendChild(b);
                                try { info.el.style.display = 'none'; } catch(e){}
                              }
                            } catch(e) { console.warn('fallback expired->bubble', e); }
                            return;
                          }

                          const badge = document.createElement('div');
                          badge.className = 'warn-badge-event';
                          const stageClass = (daysTo === 3) ? 'warn-stage-3' : (daysTo === 2 ? 'warn-stage-2' : (daysTo === 1 ? 'warn-stage-1' : 'warn-stage-0'));
                          badge.classList.add(stageClass);
                          badge.textContent = '⚠️';
                          const ident = 'warn-' + (info.event.id || Math.random().toString(36).slice(2,8));
                          badge.setAttribute('data-warn-id', ident);
                          info.el.appendChild(badge);
                          const evWidth = info.el.offsetWidth;
                          if (evWidth < 48) {
                            badge.style.top = '-6px';
                            badge.style.right = '0px';
                          }

                        } catch(err) {
                          console.warn('warn badge error', err);
                        }
                    },

                    eventWillUnmount: function(info) {
                      try {
                        if (info.el) {
                          const b = info.el.querySelectorAll('.warn-badge-event');
                          b.forEach(x => x.remove());
                        }
                      } catch(e){}
                    },

                    datesSet: function() {
\t\t\t\tsetTimeout(() => {
\t\t\t\t  try {
\t\t\t\t\tif (eventsToRemove.size) {
\t\t\t\t\t  eventsToRemove.forEach(id => {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t  const ev = calendar.getEventById(id);
\t\t\t\t\t\t  if (ev) ev.remove();
\t\t\t\t\t\t} catch(e){}
\t\t\t\t\t  });
\t\t\t\t\t  eventsToRemove.clear();
\t\t\t\t\t}
\t\t\t\t\tif (eventElsToRemove.length) {
\t\t\t\t\t  eventElsToRemove.forEach(el => { try{ el.remove(); }catch(e){} });
\t\t\t\t\t  eventElsToRemove = [];
\t\t\t\t\t}

\t\t\t\t\ttry { calendar.updateSize(); } catch(e) { try { calendar.render(); } catch(e){} }

\t\t\t\t\trenderExtras(extrasByDate);
\t\t\t\t  } catch(e) {
\t\t\t\t\tconsole.warn('cleanup error', e);
\t\t\t\t  }
\t\t\t\t}, 200);
                    }
                });

                calendar.render();
                window.__fullcalendar_instance = calendar;

                setTimeout(() => {
                  try {
                    if (eventElsToRemove.length) {
                      eventElsToRemove.forEach(el => { try{ el.remove(); }catch(e){} });
                      eventElsToRemove = [];
                    }
                    renderExtras(extrasByDate);
                  } catch(e) {
                    console.warn('cleanup error', e);
                  }
                }, 120);

\t\t\t\tfunction renderExtras(extras) {
\t\t\t\t  document.querySelectorAll('.extras-bubbles').forEach(n => n.remove());
\t\t\t\t  if (!extras || typeof extras !== 'object') return;

\t\t\t\t  const MAX_VISIBLE_BUBBLES = 4;
\t\t\t\t  const extraPadding = 6;
\t\t\t\t  const safetyMargin = 4;
\t\t\t\t  
\t\t\t\t  let measuredBubbleHeight = 28;
\t\t\t\t  try {
\t\t\t\t\tconst probeWrap = document.createElement('div');
\t\t\t\t\tprobeWrap.style.position = 'absolute'; probeWrap.style.left = '-9999px'; probeWrap.style.top = '-9999px'; probeWrap.style.visibility = 'hidden';
\t\t\t\t\tconst probe1 = document.createElement('div'); probe1.className = 'extras-bubble';
\t\t\t\t\tprobe1.textContent = '•';
\t\t\t\t\tprobeWrap.appendChild(probe1); document.body.appendChild(probeWrap);
\t\t\t\t\tmeasuredBubbleHeight = Math.ceil(probe1.getBoundingClientRect().height) || measuredBubbleHeight;
\t\t\t\t\tdocument.body.removeChild(probeWrap);
\t\t\t\t  } catch(e){}

\t\t\t\t  const bubbleRowHeight = measuredBubbleHeight + 2;

\t\t\t\t  const rows = Array.from(calendarEl.querySelectorAll('.fc-daygrid-body tr'));
\t\t\t\t  rows.forEach(row => {
\t\t\t\t\tconst cells = Array.from(row.querySelectorAll('[data-date], .fc-daygrid-day, .fc-day'));
\t\t\t\t\tif (!cells.length) return;

\t\t\t\t\tconst cellInfos = cells.map(cell => {
\t\t\t\t\t  const frame = cell.querySelector('.fc-daygrid-day-frame') || cell;
\t\t\t\t\t  try { if (!frame.style.position) frame.style.position = 'relative'; } catch(e){}
\t\t\t\t\t  const eventEls = frame.querySelectorAll('.fc-daygrid-event');
\t\t\t\t\t  let lastBottom = 0;
\t\t\t\t\t  if (eventEls && eventEls.length) {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t  const last = eventEls[eventEls.length - 1];
\t\t\t\t\t\t  const lastRect = last.getBoundingClientRect();
\t\t\t\t\t\t  const frameRect = frame.getBoundingClientRect();
\t\t\t\t\t\t  lastBottom = Math.max(0, lastRect.bottom - frameRect.top);
\t\t\t\t\t\t} catch (e) { lastBottom = 0; }
\t\t\t\t\t  }
\t\t\t\t\t  return { cell, frame, lastBottom };
\t\t\t\t\t});

\t\t\t\t\tconst maxBottom = cellInfos.reduce((m, ci) => Math.max(m, ci.lastBottom || 0), 0);
\t\t\t\t\t
\t\t\t\t\tconst requiredMinHeight = maxBottom + extraPadding + bubbleRowHeight + safetyMargin;

\t\t\t\t\tcellInfos.forEach(ci => {
\t\t\t\t\t  try {
\t\t\t\t\t\tci.frame.style.minHeight = `\${requiredMinHeight}px`;
\t\t\t\t\t  } catch(e){}
\t\t\t\t\t});

\t\t\t\t\tcellInfos.forEach(ci => {
\t\t\t\t\t  const date = ci.cell.getAttribute('data-date');
\t\t\t\t\t  if (!date) return;
\t\t\t\t\t  const raw = Array.isArray(extras[date]) ? extras[date] : [];
\t\t\t\t\t  if (raw.length === 0) return;

\t\t\t\t\t  const frame = ci.frame;
\t\t\t\t\t  const topPosition = maxBottom + extraPadding;

\t\t\t\t\t  const expiredItems = raw.filter(x => x && x._expired);
\t\t\t\t\t  const nonExpiredItems = raw.filter(x => !x || !x._expired);
\t\t\t\t\t  const toRenderArr = expiredItems.concat(nonExpiredItems);

\t\t\t\t\t  const container = document.createElement('div');
\t\t\t\t\t  container.className = 'extras-bubbles';
\t\t\t\t\t  container.style.position = 'absolute';
\t\t\t\t\t  container.style.left = '4px';
\t\t\t\t\t  container.style.zIndex = 600;
\t\t\t\t\t  container.style.top = topPosition + 'px'; 

\t\t\t\t\t  container.style.display = 'flex';
\t\t\t\t\t  container.style.gap = '6px';
\t\t\t\t\t  container.style.alignItems = 'center';
\t\t\t\t\t  container.style.flexWrap = 'nowrap';
\t\t\t\t\t  container.style.justifyContent = 'flex-start';

\t\t\t\t\t  const toShow = toRenderArr.slice(0, MAX_VISIBLE_BUBBLES);
\t\t\t\t\t  toShow.forEach(p => {
\t\t\t\t\t\tconst b = document.createElement('div');
\t\t\t\t\t\tb.className = 'extras-bubble';
\t\t\t\t\t\tb.title = p && p.nome ? p.nome : (p && p.emoji ? p.emoji : '');
\t\t\t\t\t\tb.textContent = p && p.emoji ? p.emoji : '•';
\t\t\t\t\t\tb.style.backgroundColor = (p && p.color) ? p.color : '#999';
\t\t\t\t\t\tb.style.pointerEvents = 'auto';
\t\t\t\t\t\tb.style.cursor = 'pointer';
\t\t\t\t\t\tcontainer.appendChild(b);
\t\t\t\t\t\t
\t\t\t\t\t\tconst productIdForBubble = (p && (p.prodottoId || p.productId)) ? (p.prodottoId || p.productId) : (p && (p.stockEntryId || p.id) ? (p.stockEntryId || p.id) : null);
\t\t\t\t\t\tif (productIdForBubble) {
\t\t\t\t\t\t  b.dataset.prodottoId = productIdForBubble;
\t\t\t\t\t\t}
\t\t\t\t\t\tattachBubbleClickHandler(b, p);


\t\t\t\t\t  });

\t\t\t\t\t  if (toRenderArr.length > MAX_VISIBLE_BUBBLES) {
\t\t\t\t\t\tconst representative = toRenderArr[MAX_VISIBLE_BUBBLES] || toRenderArr[0];
\t\t\t\t\t\tconst more = document.createElement('div');
\t\t\t\t\t\tmore.className = 'extras-bubble extras-more';
\t\t\t\t\t\tmore.textContent = '➕';
\t\t\t\t\t\tmore.title = '+' + (toRenderArr.length - MAX_VISIBLE_BUBBLES) + ' altri';
\t\t\t\t\t\tmore.style.backgroundColor = (representative && representative.color) ? representative.color : '#666';
\t\t\t\t\t\tmore.style.pointerEvents = 'none';
\t\t\t\t\t\tcontainer.appendChild(more);
\t\t\t\t\t  }

\t\t\t\t\t  frame.appendChild(container);
\t\t\t\t\t});
\t\t\t\t  });
\t\t\t\t}



                renderExtras(extrasByDate);

                window.addEventListener('resize', function(){ setTimeout(()=> renderExtras(extrasByDate), 120); });

            } catch (err) {
                console.error('Errore inizializzazione FullCalendar:', err);
                const el = document.getElementById('calendar');
                if (el) el.innerHTML = '<div class=\"alert alert-warning\">Impossibile caricare il calendario: ' + (err.message || '') + '</div>';
            }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }
    })();
\t


async function initProductFormWidgets(container) {
  if (!container) return null;
  const form = (container.tagName && container.tagName.toLowerCase() === 'form') ? container : container.querySelector('form');
  if (!form) return null;

  if (!form.action || form.action.trim() === '') {
    form.action = window.__newProductUrl || '";
        // line 944
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_new");
        yield "';
  }

  function ensureHiddenInputLocal(formEl, name, idFallback) {
    let inp = formEl.querySelector('input[name=\"'+name+'\"]');
    if (inp) return inp;
    const byId = idFallback ? formEl.querySelector('#' + idFallback) : null;
    if (byId && !byId.name) { byId.name = name; return byId; }
    const h = document.createElement('input'); h.type='hidden'; h.name = name;
    if (idFallback) h.id = idFallback;
    formEl.appendChild(h);
    return h;
  }

try {
  let cat = form.querySelector('select[name*=\"categoria\"], select[id*=\"categoria\"]');
  if (!cat) {
    const selects = Array.from(form.querySelectorAll('select'));
    for (const s of selects) {
      const opt = Array.from(s.options).find(o => (o.text || '').toLowerCase().trim() === 'altro');
      if (opt) { cat = s; break; }
    }
  }

  const altroInput = form.querySelector('input[name*=\"categoria_custom\"], input[id*=\"categoriaCustom\"], input[name*=\"categoria_altro\"], input[id*=\"categoria_altro\"], textarea[name*=\"categoria_custom\"]');
\tconst altroWrap = document.getElementById('categoriaCustomWrap') || (altroInput ? altroInput : null);

function showAltro() {
  if (altroWrap && altroWrap !== altroInput) {
    try { altroWrap.style.display = ''; } catch(e){}
  } else if (altroInput) {
    try { altroInput.style.display = ''; } catch(e){}
  }
  if (altroInput) {
    try { altroInput.removeAttribute('disabled'); altroInput.focus({preventScroll:true}); } catch(e){}
    try { altroInput.removeAttribute('style'); } catch(e){}
  }
}
function hideAltro() {
  if (altroWrap && altroWrap !== altroInput) {
    try { altroWrap.style.display = 'none'; } catch(e){}
  } else if (altroInput) {
    try { altroInput.style.display = 'none'; } catch(e){}
  }
  if (altroInput) {
    try { altroInput.setAttribute('disabled','disabled'); } catch(e){}
  }
}


  function handleCatChange() {
    if (!cat) return;
    const selIdx = cat.selectedIndex;
    const selectedVal = (cat.value || '').toString().toLowerCase().trim();
    const selectedText = (selIdx >= 0 && cat.options[selIdx] && (cat.options[selIdx].text || '')).toLowerCase().trim();
    const isAltro = (selectedVal === 'altro' || selectedText === 'altro' || selectedVal === '__custom__' || selectedText === 'other');
    if (isAltro) showAltro(); else hideAltro();
  }

  if (cat) {
    if (!cat.dataset.pantryCatBound) {
      cat.addEventListener('change', handleCatChange);
      cat.addEventListener('input', handleCatChange);
      cat.dataset.pantryCatBound = '1';
    }
    handleCatChange();
  } else if (altroWrap) {
    if (altroInput && !altroInput.disabled) showAltro(); else hideAltro();
  }
} catch(e){ console.warn('categoria init err', e); }


  try {
    const palette = container.querySelector('#colorPalette');
    const colorGrid = container.querySelector('#colorGrid');
    const grayGrid = container.querySelector('#grayGrid');
    const previewBtn = container.querySelector('#colorPreviewBtn');
    const hexLabel = container.querySelector('#colorName');
    const closeBtn = container.querySelector('#closePalette');
    const hiddenColorByName = ensureHiddenInputLocal(form, 'prodotto[colore]', 'colorHidden');

    try {
      const serverVal = (function(){ try { return ";
        // line 1026
        yield (((array_key_exists("form", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colore", [], "any", false, false, false, 1026), "vars", [], "any", false, false, false, 1026), "value", [], "any", false, false, false, 1026)))) ? (json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colore", [], "any", false, false, false, 1026), "vars", [], "any", false, false, false, 1026), "value", [], "any", false, false, false, 1026))) : ("null"));
        yield "; } catch(e){ return null; } })();
      let hex = null;
      if (serverVal) hex = (typeof serverVal === 'string') ? serverVal : null;
      if (!hex) hex = '#ffffff';
      const colorHiddenEl = container.querySelector('#colorHidden');
      if (colorHiddenEl) colorHiddenEl.value = hex;
      if (hiddenColorByName) hiddenColorByName.value = hex;
      if (previewBtn) previewBtn.style.background = hex;
      if (hexLabel) hexLabel.textContent = (typeof nameFromHex === 'function' ? nameFromHex(hex) : hex);
    } catch(e){  }

    if (grayGrid && grayGrid.children.length === 0) {
      const n = 32;
      for(let i=0;i<n;i++){
        const v = Math.round(255 - (i * (255/(n-1))));
        const hex = ('#' + [v,v,v].map(x=>x.toString(16).padStart(2,'0')).join(''));
        const btn = document.createElement('button');
        btn.type='button'; btn.className='gray-swatch'; btn.setAttribute('data-color', hex);
        btn.style.background = hex; btn.title = hex;
        btn.addEventListener('click', ()=> selectColor(hex, btn));
        grayGrid.appendChild(btn);
      }
    }
    if (colorGrid && colorGrid.children.length === 0) {
      const rows = 8, cols = 32, sat = 78, minL = 18, maxL = 88;
      for(let row=0; row<rows; row++){
        for(let col=0; col<cols; col++){
          const hue = Math.round((col/cols)*360);
          const light = Math.round(maxL - row*((maxL-minL)/(rows-1)));
          const c = document.createElement('canvas'); c.width=c.height=1;
          const ctx = c.getContext('2d');
          ctx.fillStyle = `hsl(\${hue} \${sat}% \${light}%)`;
          ctx.fillRect(0,0,1,1);
          const p = ctx.getImageData(0,0,1,1).data;
          const hex = ('#' + [p[0],p[1],p[2]].map(x=>x.toString(16).padStart(2,'0')).join(''));
          const btn = document.createElement('button');
          btn.type='button'; btn.className='swatch'; btn.setAttribute('data-color', hex);
          btn.style.background = hex; btn.title = hex;
          btn.addEventListener('click', ()=> selectColor(hex, btn));
          colorGrid.appendChild(btn);
        }
      }
    }

function hexToRgb(hex) {
  if (!hex) return null;
  hex = String(hex).replace('#','');
  if (hex.length === 3) hex = hex.split('').map(c => c+c).join('');
  const r = parseInt(hex.slice(0,2),16);
  const g = parseInt(hex.slice(2,4),16);
  const b = parseInt(hex.slice(4,6),16);
  return { r, g, b };
}
function rgbToHsl(r,g,b) {
  r/=255; g/=255; b/=255;
  const max = Math.max(r,g,b), min = Math.min(r,g,b);
  let h=0, s=0, l=(max+min)/2;
  if (max !== min) {
    const d = max - min;
    s = l > 0.5 ? d/(2-max-min) : d/(max+min);
    switch(max) {
      case r: h = (g - b) / d + (g < b ? 6 : 0); break;
      case g: h = (b - r) / d + 2; break;
      case b: h = (r - g) / d + 4; break;
    }
    h *= 60;
  }
  return { h: Math.round(h), s: Math.round(s*100), l: Math.round(l*100) };
}
function nameFromHex(hex) {
  try {
    const rgb = hexToRgb(hex);
    if (!rgb) return hex;
    const {h,s,l} = rgbToHsl(rgb.r, rgb.g, rgb.b);
    if (s <= 8) {
      if (l >= 95) return 'Bianco';
      if (l >= 80) return 'Grigio molto chiaro';
      if (l >= 60) return 'Grigio chiaro';
      if (l >= 40) return 'Grigio';
      if (l >= 20) return 'Grigio scuro';
      return 'Nero';
    }
    const sectors = [
      {max:15, name:'Rosso'}, {max:45, name:'Arancione'}, {max:75, name:'Giallo'}, {max:105, name:'Giallo-verde'},
      {max:135, name:'Verde'}, {max:165, name:'Verde-ciano'}, {max:195, name:'Ciano'}, {max:225, name:'Ciano-blu'},
      {max:255, name:'Blu'}, {max:285, name:'Viola'}, {max:315, name:'Magenta'}, {max:345, name:'Rosso porpora'}, {max:360, name:'Rosso'},
    ];
    let base = 'Colore';
    for (const sct of sectors) { if (h <= sct.max) { base = sct.name; break; } }
    if (l >= 80) return base + ' chiaro';
    if (l >= 60) return base + ' medio-chiaro';
    if (l >= 40) return base;
    if (l >= 20) return base + ' scuro';
    return base + ' molto scuro';
  } catch(e){ return hex; }
}


let current = null;
function selectColor(hex, btnEl){
  try {
    if(!hex) return;
    if (current && current.classList) current.classList.remove('selected');
    if (btnEl && btnEl.classList) { current = btnEl; current.classList.add('selected'); }

    const byId = container.querySelector('#colorHidden');
    if (byId) byId.value = hex;
    if (hiddenColorByName) hiddenColorByName.value = hex;

    if (previewBtn) previewBtn.style.background = hex;

    if (hexLabel) hexLabel.textContent = (typeof nameFromHex === 'function' ? nameFromHex(hex) : hex);

    if (palette) palette.style.display = 'none';
  } catch(e){ console.error('[pantry] selectColor error', e); }
}

try {
  const observedHidden = container.querySelector('input[name=\"prodotto[colore]\"], #colorHidden');
  if (observedHidden) {
    observedHidden.addEventListener('input', function(){
      const v = this.value || observedHidden.getAttribute('value') || '';
      try { if (previewBtn) previewBtn.style.background = v; } catch(e){}
      try { if (hexLabel) hexLabel.textContent = (typeof nameFromHex === 'function' ? nameFromHex(v) : v); } catch(e){}
    });
    const mo = new MutationObserver(()=> {
      const v = observedHidden.value || observedHidden.getAttribute('value') || '';
      try { if (previewBtn) previewBtn.style.background = v; } catch(e){}
      try { if (hexLabel) hexLabel.textContent = (typeof nameFromHex === 'function' ? nameFromHex(v) : v); } catch(e){}
    });
    mo.observe(observedHidden, { attributes: true, attributeFilter: ['value'] });
  }
} catch(e){  }

try {
  if (colorGrid) {
    colorGrid.querySelectorAll('button[data-color]').forEach(b => {
      if (!b._pantryColorBound) {
        b.addEventListener('click', function(){ selectColor(this.getAttribute('data-color'), this); });
        b._pantryColorBound = true;
      }
    });
  }
  if (grayGrid) {
    grayGrid.querySelectorAll('button[data-color]').forEach(b => {
      if (!b._pantryGrayBound) {
        b.addEventListener('click', function(){ selectColor(this.getAttribute('data-color'), this); });
        b._pantryGrayBound = true;
      }
    });
  }
} catch(e){}

    if (previewBtn) {
      previewBtn.addEventListener('click', function(e){
        e.stopPropagation();
        if (!palette) return;
        palette.style.display = (palette.style.display === 'block') ? 'none' : 'block';
      });
    }
    if (closeBtn) closeBtn.addEventListener('click', ()=>{ if (palette) palette.style.display='none'; });

    document.addEventListener('click', function(e){ if (palette && !palette.contains(e.target) && e.target !== previewBtn) palette.style.display = 'none'; });

  } catch(e){ console.warn('color init err', e); }

  try {
    const tagInputs = form.querySelectorAll('input[name*=\"tags_input\"], input[data-tagify], input[name*=\"tag\"], input[id*=\"tag\"]');
    tagInputs.forEach(ti => {
      if (ti._tagify) { try { ti._tagify.destroy(); } catch(_) {} }
      if (window.Tagify) {
        ti._tagify = new Tagify(ti, { delimiters: \",\" });
      }
    });
  } catch(e){ console.warn('tagify init err', e); }

  try {
    const emojiTrigger = container.querySelector('#emojiPreviewBtn');
    const hiddenEmojiByName = ensureHiddenInputLocal(form, 'prodotto[emoji]', 'emojiHidden');
    const emojiLabel = container.querySelector('#emojiLabel');

    async function openEmojiPickerLocal() {
      if (!emojiTrigger) return;
      try {
        if (!window.customElements.get('emoji-picker')) {
          await import('https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js');
        }
        const existing = document.querySelector('emoji-picker.poppy');
        if (existing) { existing.remove(); return; }

        const picker = document.createElement('emoji-picker');
        picker.classList.add('poppy');
        picker.style.position = 'absolute';
        picker.style.zIndex = '300000';
        picker.style.boxShadow = '0 8px 30px rgba(0,0,0,0.12)';
        picker.style.borderRadius = '8px';
        picker.style.maxWidth = 'min(92vw,600px)';
        picker.style.maxHeight = '60vh';
        document.body.appendChild(picker);

        const rect = emojiTrigger.getBoundingClientRect();
        const top = rect.bottom + window.scrollY + 6;
        let left = rect.left + window.scrollX;
        const w = Math.min(window.innerWidth * 0.92, 600);
        if (left + w > window.innerWidth) left = Math.max(8, window.innerWidth - w - 8);
        picker.style.left = left + 'px';
        picker.style.top = top + 'px';
        picker.style.width = w + 'px';

        picker.addEventListener('emoji-click', function(ev){
          try {
            const d = ev && ev.detail ? ev.detail : null;
            let emojiChar = '';
            if (d) {
              if (typeof d === 'string') emojiChar = d;
              else if (d.emoji) emojiChar = d.emoji.native || d.emoji.character || d.unicode || '';
            } else {
              emojiChar = (ev.target && ev.target.textContent) ? ev.target.textContent : '';
            }
            if (!emojiChar) return;
            if (hiddenEmojiByName) hiddenEmojiByName.value = emojiChar;
            const byId = container.querySelector('#emojiHidden');
            if (byId) byId.value = emojiChar;
            if (emojiTrigger) emojiTrigger.textContent = emojiChar;
            if (emojiLabel) emojiLabel.textContent = emojiChar;
            picker.remove();
          } catch(e){ console.error('emoji-click handler error', e); }
        });

        setTimeout(()=> {
          function onDocClick(e){ if (!picker.contains(e.target) && e.target !== emojiTrigger) { picker.remove(); document.removeEventListener('click', onDocClick); } }
          document.addEventListener('click', onDocClick);
        }, 10);

      } catch (err) {
        console.warn('openEmojiPickerLocal error', err);
        const fallback = prompt('Inserisci emoji (fallback):');
        if (fallback) {
          if (hiddenEmojiByName) hiddenEmojiByName.value = fallback;
          const byId = container.querySelector('#emojiHidden');
          if (byId) byId.value = fallback;
          if (emojiTrigger) emojiTrigger.textContent = fallback;
          if (emojiLabel) emojiLabel.textContent = fallback;
        }
      }
    }

    if (emojiTrigger) {
      emojiTrigger.addEventListener('click', function(e){ e.stopPropagation(); openEmojiPickerLocal(); });
    }
  } catch(e){ console.warn('emoji init err', e); }

  try {
    form.addEventListener('submit', function(e){
      try {
        ensureHiddenInputLocal(form, 'prodotto[colore]', 'colorHidden');
        ensureHiddenInputLocal(form, 'prodotto[emoji]', 'emojiHidden');
      } catch(e){}
    }, {capture:true});
  } catch(e){}

  return form;
}

async function openNewProductModal() {
  const modalEl = document.getElementById('modalNewProduct');
  const modalBody = document.getElementById('modalNewProductBody');
  const url = window.__newProductUrl || '";
        // line 1293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_new");
        yield "';

  const bsModal = new bootstrap.Modal(modalEl, { keyboard: true });

  modalBody.innerHTML = '<div class=\"text-center py-3\"><div class=\"spinner-border\" role=\"status\"><span class=\"visually-hidden\">Caricamento...</span></div></div>';
  bsModal.show();

  try {
    const resp = await fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'text/html' }});
    if (!resp.ok) throw new Error('Errore caricamento form: ' + resp.status);
    const html = await resp.text();
    modalBody.innerHTML = html;

    let newForm;
    try {
      newForm = initProductFormWidgets(modalBody);
      if (newForm && typeof newForm.then === 'function') {
        newForm = await newForm;
      }
    } catch (initErr) {
      console.warn('initProductFormWidgets ha lanciato un errore:', initErr);
      newForm = null;
    }

    if (!(newForm instanceof HTMLFormElement)) {
      newForm = modalBody.querySelector('form');
    }

    if (!newForm) {
      console.error('openNewProductModal: form non trovato dentro il modal dopo iniezione HTML', modalBody);
      modalBody.innerHTML = '<div class=\"alert alert-danger\">Errore: form non trovato nel modal.</div>';
      return;
    }

    if (!newForm.action || newForm.action.trim() === '') {
      newForm.action = window.__newProductUrl || '";
        // line 1328
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_new");
        yield "';
    }

    if (!newForm.dataset.pantryModalBound) {
      newForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        await submitProductFormAJAX(newForm, bsModal);
      });
      newForm.dataset.pantryModalBound = '1';
    }

    try {
      const colorErrEl = modalBody.querySelector('#colorHidden') ? (modalBody.querySelector('#colorHidden').closest('div')?.querySelector('.form-error')) : modalBody.querySelector('.form-error');
      if (colorErrEl && colorErrEl.textContent && colorErrEl.textContent.trim().length) {
        const btn = modalBody.querySelector('#colorPreviewBtn');
        if (btn) btn.classList.add('is-invalid');
      }
      const emojiErrEl = modalBody.querySelector('#emojiHidden') ? (modalBody.querySelector('#emojiHidden').closest('div')?.querySelector('.form-error')) : null;
      if (emojiErrEl && emojiErrEl.textContent && emojiErrEl.textContent.trim().length) {
        const eb = modalBody.querySelector('#emojiPreviewBtn');
        if (eb) eb.classList.add('is-invalid');
      }
    } catch(e){  }

  } catch (err) {
    modalBody.innerHTML = '<div class=\"alert alert-danger\">Impossibile caricare il form: ' + (err.message || '') + '</div>';
    console.error(err);
  }
}

async function submitProductFormAJAX(form, bsModal) {
  const action = form.action;
  const method = (form.method || 'POST').toUpperCase();
  const formData = new FormData(form);

  const submitBtn = form.querySelector('[type=\"submit\"]');
  const originalBtnHtml = submitBtn ? submitBtn.innerHTML : null;
  if (submitBtn) {
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Salvataggio...';
  }

  try {
    const resp = await fetch(action, {
      method: method,
      body: formData,
      headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
    });

    if (resp.ok && resp.headers.get('content-type') && resp.headers.get('content-type').includes('application/json')) {
      const data = await resp.json();
      if (data.success) {
        bsModal.hide();
        showTemporaryAlert('Prodotto creato', 'success');

        if (window.__fullcalendar_instance && typeof window.__fullcalendar_instance.refetchEvents === 'function') {
          window.__fullcalendar_instance.refetchEvents();
        }
        return;
      } else {
        console.warn('Risposta JSON senza success=true', data);
      }
    }

\tif (resp.status === 422 || resp.status === 400 || (resp.headers.get('content-type') && resp.headers.get('content-type').includes('text/html'))) {
\t  const html = await resp.text();
\t  const modalBody = document.getElementById('modalNewProductBody');
\t  modalBody.innerHTML = html;

\t  const newForm = initProductFormWidgets(modalBody);

\t  if (newForm) {
\t\tif (!newForm.action || newForm.action.trim() === '') {
\t\t  newForm.action = window.__newProductUrl || '";
        // line 1401
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_new");
        yield "';
\t\t}
\t\tnewForm.addEventListener('submit', async function(e) {
\t\t  e.preventDefault();
\t\t  await submitProductFormAJAX(newForm, bsModal);
\t\t});
\t  }
\t  return;
\t}

    const txt = await resp.text();
    throw new Error('Errore server: ' + resp.status + ' ' + txt.slice(0,200));
  } catch (err) {
    console.error('submitProductFormAJAX error', err);
    showTemporaryAlert('Errore durante il salvataggio: ' + (err.message || ''), 'danger');
  } finally {
    if (submitBtn) {
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalBtnHtml;
    }
  }
}

function showTemporaryAlert(msg, type = 'info', timeout = 3000) {
  const container = document.createElement('div');
  container.className = 'alert alert-' + type;
  container.style.position = 'fixed';
  container.style.right = '20px';
  container.style.top = '20px';
  container.style.zIndex = 2000;
  container.innerText = msg;
  document.body.appendChild(container);
  setTimeout(() => {
    container.remove();
  }, timeout);
}

function buildShowUrlForId(id) {
  try {
    let tpl = window.__showProductUrlTemplate || '/prodotto/0/fragment';
    if (tpl.indexOf('/0') !== -1) return tpl.replace('/0', '/' + encodeURIComponent(id));
    if (tpl.indexOf('{id}') !== -1) return tpl.replace('{id}', encodeURIComponent(id));
    if (tpl.endsWith('/')) tpl = tpl.slice(0, -1);
    return tpl.replace(/\\/\\d+\\/fragment\$|\\/\\d+\$/, '') + '/' + encodeURIComponent(id) + '/fragment';
  } catch (e) {
    console.warn('buildShowUrlForId fallback', e);
    return '/prodotto/' + encodeURIComponent(id) + '/fragment';
  }
}

async function openProductShowModalById(prodId) {
  if (!prodId) return console.warn('openProductShowModalById: missing prodId');

  const modalEl = document.getElementById('modalShowProduct');
  const modalBody = document.getElementById('modalShowProductBody');

  if (!modalEl || !modalBody) {
    console.error('Modal elements not found: expected #modalShowProduct and #modalShowProductBody');
    return;
  }

  modalBody.innerHTML = '<div class=\"text-center py-4\"><div class=\"spinner-border\" role=\"status\"><span class=\"visually-hidden\">Caricamento...</span></div></div>';
  const bsModal = new bootstrap.Modal(modalEl, { keyboard: true });
  bsModal.show();

  const candidates = [];

  try {
    if (window.__prodFragmentUrlTemplate) {
      candidates.push(window.__prodFragmentUrlTemplate.replace(/\\/0(\\/|\$)/, '/' + encodeURIComponent(prodId) + '\$1'));
    }
    if (window.__prodShowUrlTemplate) {
      candidates.push(window.__prodShowUrlTemplate.replace(/\\/0(\\/|\$)/, '/' + encodeURIComponent(prodId) + '\$1'));
    }
  } catch (e) {  }

  candidates.push('/prodotto/' + encodeURIComponent(prodId) + '/fragment');
  candidates.push('/prodotto/' + encodeURIComponent(prodId));

  if (window.__appBasePath) {
    const base = window.__appBasePath.replace(/\\/\$/, '');
    candidates.push(base + '/prodotto/' + encodeURIComponent(prodId) + '/fragment');
    candidates.push(base + '/prodotto/' + encodeURIComponent(prodId));
  }

  const triedSet = new Set();
  const urls = [];
  for (const u of candidates) {
    if (!u) continue;
    const clean = u.replace(/\\/+/g, '/'); 
    if (!triedSet.has(clean)) { triedSet.add(clean); urls.push(clean); }
  }

  async function fetchHtml(url) {
    const resp = await fetch(url, {
      headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'text/html' },
      credentials: 'same-origin'
    });
    if (!resp.ok) throw new Error('HTTP ' + resp.status + ' fetching ' + url);
    return await resp.text();
  }

  let lastErr = null;
  for (const url of urls) {
    console.debug('[modal] trying url:', url);
    try {
      const html = await fetchHtml(url);
      modalBody.innerHTML = html;

      const scripts = modalBody.querySelectorAll('script');
      scripts.forEach(oldScript => {
        const newScript = document.createElement('script');
        if (oldScript.src) {
          newScript.src = oldScript.src;
          document.body.appendChild(newScript);
        } else {
          newScript.textContent = oldScript.textContent;
          modalBody.appendChild(newScript);
        }
        oldScript.remove();
      });

      if (typeof initProductFormWidgets === 'function') {
        try { initProductFormWidgets(modalBody); } catch(e){ console.warn('initProductFormWidgets failed', e); }
      }

      return; 
    } catch (err) {
      console.warn('[modal] fetch failed for', url, err);
      lastErr = err;
    }
  }

  modalBody.innerHTML = '<div class=\"alert alert-danger\">Impossibile caricare il prodotto: ' + (lastErr ? lastErr.message : 'errore sconosciuto') + '</div>';
  console.error('openProductShowModalById: all candidates failed. tried:', urls, 'lastErr:', lastErr);
}


    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1512 => 1401,  1436 => 1328,  1398 => 1293,  1128 => 1026,  1043 => 944,  293 => 197,  283 => 191,  276 => 190,  266 => 184,  240 => 161,  206 => 129,  199 => 128,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\home\\index.html.twig");
    }
}
