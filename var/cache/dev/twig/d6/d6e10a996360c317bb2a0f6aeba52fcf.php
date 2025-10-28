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

/* prodotto/_card_fragment.html.twig */
class __TwigTemplate_d0b322603bb5a2c385fc9a8637cd8343 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodotto/_card_fragment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodotto/_card_fragment.html.twig"));

        // line 1
        yield "<style>
  .product-card {
    max-width: 900px;
    margin: 0.3rem auto;
  }
  .product-identity {
    display: grid;
    grid-template-columns: 120px 1fr;
    gap: 1rem;
    align-items: center;
  }
  .emoji-big {
    font-size: 48px;
    width: 120px;
    height: 120px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    border: 1px solid rgba(0,0,0,0.06);
    background: #fff;
    box-shadow: 0 4px 14px rgba(0,0,0,0.04);
  }
  .color-swatch {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    border: 1px solid rgba(0,0,0,0.08);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.15);
    display:inline-block;
    vertical-align: middle;
    margin-right: 0.5rem;
  }
  .meta-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 0.75rem;
    margin-top: 0.75rem;
  }
  .meta-item { background:#fff; padding:.65rem; border-radius:8px; border:1px solid rgba(0,0,0,0.04); }
  .meta-label { font-size:.78rem; color:#6c757d; display:block; margin-bottom:.35rem; }
  .meta-value { font-weight:600; font-size:1rem; }
  @media (max-width:720px) {
    .product-identity { grid-template-columns: 1fr; grid-auto-rows: auto; text-align:center; }
    .emoji-big { margin: 0 auto; }
    .meta-grid { grid-template-columns: 1fr; }
  }
  #modalShowProductBody .product-card { margin: 0; }
</style>

<div class=\"product-card\">
  <div class=\"d-flex justify-content-between align-items-start mb-2\">
    <h1 class=\"h5 mb-0\">Scheda Prodotto</h1>
    <div>
    </div>
  </div>

  <div class=\"card shadow-sm p-3\">
    <div class=\"product-identity\">
      <div>
        <div class=\"emoji-big\" aria-hidden=\"true\">
          ";
        // line 62
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 62, $this->source); })()), "emoji", [], "any", false, false, false, 62)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 62, $this->source); })()), "emoji", [], "any", false, false, false, 62), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getEmoji", [], "any", true, true, false, 62)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 62, $this->source); })()), "getEmoji", [], "method", false, false, false, 62), "html", null, true)) : ("🍽️"))));
        yield "
        </div>

        <div class=\"mt-2 text-center d-flex justify-content-center align-items-center gap-2\">
          <span class=\"color-swatch\"
                title=\"";
        // line 67
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 67, $this->source); })()), "colore", [], "any", false, false, false, 67)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 67, $this->source); })()), "colore", [], "any", false, false, false, 67), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getColore", [], "any", true, true, false, 67)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 67, $this->source); })()), "getColore", [], "method", false, false, false, 67), "html", null, true)) : ("#ffffff"))));
        yield "\"
                style=\"background: ";
        // line 68
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 68, $this->source); })()), "colore", [], "any", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 68, $this->source); })()), "colore", [], "any", false, false, false, 68), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getColore", [], "any", true, true, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 68, $this->source); })()), "getColore", [], "method", false, false, false, 68), "html", null, true)) : ("#ffffff"))));
        yield ";\">
          </span>
          <small class=\"text-muted\">Colore</small>
        </div>
      </div>

      <div>
        <h2 class=\"h5 mb-1\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 75, $this->source); })()), "nome", [], "any", false, false, false, 75), "html", null, true);
        yield "</h2>
        <div class=\"text-muted mb-2\">";
        // line 76
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 76, $this->source); })()), "categoria", [], "any", false, false, false, 76)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 76, $this->source); })()), "categoria", [], "any", false, false, false, 76), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getCategoria", [], "any", true, true, false, 76)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 76, $this->source); })()), "getCategoria", [], "method", false, false, false, 76), "html", null, true)) : ("—"))));
        yield "</div>

        <div class=\"meta-grid\">
          <div class=\"meta-item\">
            <span class=\"meta-label\">Quantità</span>
            <span class=\"meta-value\">";
        // line 81
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "quantita", [], "any", true, true, false, 81)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 81, $this->source); })()), "quantita", [], "any", false, false, false, 81), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getQuantita", [], "any", true, true, false, 81)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 81, $this->source); })()), "getQuantita", [], "method", false, false, false, 81), "html", null, true)) : ("—"))));
        yield "</span>
          </div>

          <div class=\"meta-item\">
            <span class=\"meta-label\">Scadenza</span>
            <span class=\"meta-value\">
              ";
        // line 87
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "scadenza", [], "any", true, true, false, 87) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 87, $this->source); })()), "scadenza", [], "any", false, false, false, 87))) {
            // line 88
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 88, $this->source); })()), "scadenza", [], "any", false, false, false, 88), "Y-m-d"), "html", null, true);
            yield "
              ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["prodotto"] ?? null), "getScadenza", [], "any", true, true, false, 89) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 89, $this->source); })()), "getScadenza", [], "method", false, false, false, 89))) {
            // line 90
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 90, $this->source); })()), "getScadenza", [], "method", false, false, false, 90), "Y-m-d"), "html", null, true);
            yield "
              ";
        } else {
            // line 92
            yield "                &mdash;
              ";
        }
        // line 94
        yield "            </span>
          </div>

          <div class=\"meta-item\">
            <span class=\"meta-label\">Data di creazione</span>
            <span class=\"meta-value\">
              ";
        // line 100
        if ((array_key_exists("createdAt", $context) && (isset($context["createdAt"]) || array_key_exists("createdAt", $context) ? $context["createdAt"] : (function () { throw new RuntimeError('Variable "createdAt" does not exist.', 100, $this->source); })()))) {
            // line 101
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["createdAt"]) || array_key_exists("createdAt", $context) ? $context["createdAt"] : (function () { throw new RuntimeError('Variable "createdAt" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "
              ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 102
($context["prodotto"] ?? null), "createdAt", [], "any", true, true, false, 102) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 102, $this->source); })()), "createdAt", [], "any", false, false, false, 102))) {
            // line 103
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 103, $this->source); })()), "createdAt", [], "any", false, false, false, 103), "Y-m-d H:i"), "html", null, true);
            yield "
              ";
        } else {
            // line 105
            yield "                &mdash;
              ";
        }
        // line 107
        yield "            </span>
          </div>

          <div class=\"meta-item\">
            <span class=\"meta-label\">Categoria</span>
            <span class=\"meta-value\">";
        // line 112
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 112, $this->source); })()), "categoria", [], "any", false, false, false, 112)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 112, $this->source); })()), "categoria", [], "any", false, false, false, 112), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getCategoria", [], "any", true, true, false, 112)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 112, $this->source); })()), "getCategoria", [], "method", false, false, false, 112), "html", null, true)) : ("—"))));
        yield "</span>
          </div>
        </div>

        <div class=\"mt-3\">
          <div class=\"form-label text-muted mb-1\">Tag</div>
          ";
        // line 118
        $context["tags"] = ((array_key_exists("tags", $context)) ? ((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 118, $this->source); })())) : ([]));
        // line 119
        yield "          ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 119, $this->source); })())) > 0)) {
            // line 120
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 121
                yield "              <span class=\"badge bg-secondary me-1 mb-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "          ";
        } else {
            // line 124
            yield "            <div class=\"text-muted\">Nessun tag</div>
          ";
        }
        // line 126
        yield "        </div>

        ";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "descrizione", [], "any", true, true, false, 128) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 128, $this->source); })()), "descrizione", [], "any", false, false, false, 128))) {
            // line 129
            yield "          <div class=\"mt-3\">
            <div class=\"form-label text-muted mb-1\">Note</div>
            <div>";
            // line 131
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 131, $this->source); })()), "descrizione", [], "any", false, false, false, 131);
            yield "</div>
          </div>
        ";
        }
        // line 134
        yield "      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "prodotto/_card_fragment.html.twig";
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
        return array (  258 => 134,  252 => 131,  248 => 129,  246 => 128,  242 => 126,  238 => 124,  235 => 123,  226 => 121,  221 => 120,  218 => 119,  216 => 118,  207 => 112,  200 => 107,  196 => 105,  190 => 103,  188 => 102,  183 => 101,  181 => 100,  173 => 94,  169 => 92,  163 => 90,  161 => 89,  156 => 88,  154 => 87,  145 => 81,  137 => 76,  133 => 75,  123 => 68,  119 => 67,  111 => 62,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
  .product-card {
    max-width: 900px;
    margin: 0.3rem auto;
  }
  .product-identity {
    display: grid;
    grid-template-columns: 120px 1fr;
    gap: 1rem;
    align-items: center;
  }
  .emoji-big {
    font-size: 48px;
    width: 120px;
    height: 120px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    border: 1px solid rgba(0,0,0,0.06);
    background: #fff;
    box-shadow: 0 4px 14px rgba(0,0,0,0.04);
  }
  .color-swatch {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    border: 1px solid rgba(0,0,0,0.08);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.15);
    display:inline-block;
    vertical-align: middle;
    margin-right: 0.5rem;
  }
  .meta-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 0.75rem;
    margin-top: 0.75rem;
  }
  .meta-item { background:#fff; padding:.65rem; border-radius:8px; border:1px solid rgba(0,0,0,0.04); }
  .meta-label { font-size:.78rem; color:#6c757d; display:block; margin-bottom:.35rem; }
  .meta-value { font-weight:600; font-size:1rem; }
  @media (max-width:720px) {
    .product-identity { grid-template-columns: 1fr; grid-auto-rows: auto; text-align:center; }
    .emoji-big { margin: 0 auto; }
    .meta-grid { grid-template-columns: 1fr; }
  }
  #modalShowProductBody .product-card { margin: 0; }
</style>

<div class=\"product-card\">
  <div class=\"d-flex justify-content-between align-items-start mb-2\">
    <h1 class=\"h5 mb-0\">Scheda Prodotto</h1>
    <div>
    </div>
  </div>

  <div class=\"card shadow-sm p-3\">
    <div class=\"product-identity\">
      <div>
        <div class=\"emoji-big\" aria-hidden=\"true\">
          {{ prodotto.emoji ?: (prodotto.getEmoji is defined ? prodotto.getEmoji() : '🍽️') }}
        </div>

        <div class=\"mt-2 text-center d-flex justify-content-center align-items-center gap-2\">
          <span class=\"color-swatch\"
                title=\"{{ prodotto.colore ?: (prodotto.getColore is defined ? prodotto.getColore() : '#ffffff') }}\"
                style=\"background: {{ prodotto.colore ?: (prodotto.getColore is defined ? prodotto.getColore() : '#ffffff') }};\">
          </span>
          <small class=\"text-muted\">Colore</small>
        </div>
      </div>

      <div>
        <h2 class=\"h5 mb-1\">{{ prodotto.nome }}</h2>
        <div class=\"text-muted mb-2\">{{ prodotto.categoria ?: (prodotto.getCategoria is defined ? prodotto.getCategoria() : '—') }}</div>

        <div class=\"meta-grid\">
          <div class=\"meta-item\">
            <span class=\"meta-label\">Quantità</span>
            <span class=\"meta-value\">{{ prodotto.quantita is defined ? prodotto.quantita : (prodotto.getQuantita is defined ? prodotto.getQuantita() : '—') }}</span>
          </div>

          <div class=\"meta-item\">
            <span class=\"meta-label\">Scadenza</span>
            <span class=\"meta-value\">
              {% if prodotto.scadenza is defined and prodotto.scadenza %}
                {{ prodotto.scadenza|date('Y-m-d') }}
              {% elseif prodotto.getScadenza is defined and prodotto.getScadenza() %}
                {{ prodotto.getScadenza()|date('Y-m-d') }}
              {% else %}
                &mdash;
              {% endif %}
            </span>
          </div>

          <div class=\"meta-item\">
            <span class=\"meta-label\">Data di creazione</span>
            <span class=\"meta-value\">
              {% if createdAt is defined and createdAt %}
                {{ createdAt }}
              {% elseif prodotto.createdAt is defined and prodotto.createdAt %}
                {{ prodotto.createdAt|date('Y-m-d H:i') }}
              {% else %}
                &mdash;
              {% endif %}
            </span>
          </div>

          <div class=\"meta-item\">
            <span class=\"meta-label\">Categoria</span>
            <span class=\"meta-value\">{{ prodotto.categoria ?: (prodotto.getCategoria is defined ? prodotto.getCategoria() : '—') }}</span>
          </div>
        </div>

        <div class=\"mt-3\">
          <div class=\"form-label text-muted mb-1\">Tag</div>
          {% set tags = tags is defined ? tags : [] %}
          {% if tags|length > 0 %}
            {% for tag in tags %}
              <span class=\"badge bg-secondary me-1 mb-1\">{{ tag }}</span>
            {% endfor %}
          {% else %}
            <div class=\"text-muted\">Nessun tag</div>
          {% endif %}
        </div>

        {% if prodotto.descrizione is defined and prodotto.descrizione %}
          <div class=\"mt-3\">
            <div class=\"form-label text-muted mb-1\">Note</div>
            <div>{{ prodotto.descrizione|raw }}</div>
          </div>
        {% endif %}
      </div>
    </div>
  </div>
</div>
", "prodotto/_card_fragment.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\prodotto\\_card_fragment.html.twig");
    }
}
