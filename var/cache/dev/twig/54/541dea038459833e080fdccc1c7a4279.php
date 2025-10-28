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

/* prodotto/show.html.twig */
class __TwigTemplate_ebe7ae2f0e12241a4130b908c2363257 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodotto/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodotto/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 3, $this->source); })()), "nome", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
      .product-card {
        max-width: 900px;
        margin: 1.5rem auto;
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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 59
        yield "<div class=\"product-card\">
  <div class=\"d-flex justify-content-between align-items-start mb-2\">
    <h1 class=\"h4 mb-0\">Scheda Prodotto</h1>
    <div>
      <a class=\"btn btn-sm btn-outline-secondary me-1\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_index");
        yield "\">← Lista</a>
      <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\">Modifica</a>
    </div>
  </div>

  <div class=\"card shadow-sm p-3\">
    <div class=\"product-identity\">
      <div>
        <div class=\"emoji-big\" aria-hidden=\"true\">
          ";
        // line 72
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 72, $this->source); })()), "emoji", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 72, $this->source); })()), "emoji", [], "any", false, false, false, 72), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getEmoji", [], "method", true, true, false, 72)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 72, $this->source); })()), "getEmoji", [], "method", false, false, false, 72), "html", null, true)) : ("🍽️"))));
        yield "
        </div>

        <div class=\"mt-2 text-center d-flex justify-content-center align-items-center gap-2\">
          <span class=\"color-swatch\" title=\"";
        // line 76
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 76, $this->source); })()), "colore", [], "any", false, false, false, 76)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 76, $this->source); })()), "colore", [], "any", false, false, false, 76), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getColore", [], "method", true, true, false, 76)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 76, $this->source); })()), "getColore", [], "method", false, false, false, 76), "html", null, true)) : ("#ffffff"))));
        yield "\"
                style=\"background: ";
        // line 77
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 77, $this->source); })()), "colore", [], "any", false, false, false, 77)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 77, $this->source); })()), "colore", [], "any", false, false, false, 77), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getColore", [], "method", true, true, false, 77)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 77, $this->source); })()), "getColore", [], "method", false, false, false, 77), "html", null, true)) : ("#ffffff"))));
        yield ";\">
          </span>
          <small class=\"text-muted\">Colore</small>
        </div>
      </div>

      <div>
        <h2 class=\"h5 mb-1\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 84, $this->source); })()), "nome", [], "any", false, false, false, 84), "html", null, true);
        yield "</h2>
        <div class=\"text-muted mb-2\">";
        // line 85
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 85, $this->source); })()), "categoria", [], "any", false, false, false, 85)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 85, $this->source); })()), "categoria", [], "any", false, false, false, 85), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getCategoria", [], "method", true, true, false, 85)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 85, $this->source); })()), "getCategoria", [], "method", false, false, false, 85), "html", null, true)) : ("—"))));
        yield "</div>

        <div class=\"meta-grid\">
          <div class=\"meta-item\">
            <span class=\"meta-label\">Quantità</span>
            <span class=\"meta-value\">";
        // line 90
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "quantita", [], "any", true, true, false, 90)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 90, $this->source); })()), "quantita", [], "any", false, false, false, 90), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getQuantita", [], "method", true, true, false, 90)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 90, $this->source); })()), "getQuantita", [], "method", false, false, false, 90), "html", null, true)) : ("—"))));
        yield "</span>
          </div>

          <div class=\"meta-item\">
            <span class=\"meta-label\">Scadenza</span>
            <span class=\"meta-value\">
              ";
        // line 96
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "scadenza", [], "any", true, true, false, 96) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 96, $this->source); })()), "scadenza", [], "any", false, false, false, 96))) {
            // line 97
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 97, $this->source); })()), "scadenza", [], "any", false, false, false, 97), "Y-m-d"), "html", null, true);
            yield "
              ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 98
($context["prodotto"] ?? null), "getScadenza", [], "any", true, true, false, 98) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 98, $this->source); })()), "getScadenza", [], "method", false, false, false, 98))) {
            // line 99
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 99, $this->source); })()), "getScadenza", [], "method", false, false, false, 99), "Y-m-d"), "html", null, true);
            yield "
              ";
        } else {
            // line 101
            yield "                &mdash;
              ";
        }
        // line 103
        yield "            </span>
          </div>

          <div class=\"meta-item\">
            <span class=\"meta-label\">Data di creazione</span>
            <span class=\"meta-value\">
              ";
        // line 109
        if ((array_key_exists("createdAt", $context) && (isset($context["createdAt"]) || array_key_exists("createdAt", $context) ? $context["createdAt"] : (function () { throw new RuntimeError('Variable "createdAt" does not exist.', 109, $this->source); })()))) {
            // line 110
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["createdAt"]) || array_key_exists("createdAt", $context) ? $context["createdAt"] : (function () { throw new RuntimeError('Variable "createdAt" does not exist.', 110, $this->source); })()), "html", null, true);
            yield "
              ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 111
($context["prodotto"] ?? null), "createdAt", [], "any", true, true, false, 111) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 111, $this->source); })()), "createdAt", [], "any", false, false, false, 111))) {
            // line 112
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 112, $this->source); })()), "createdAt", [], "any", false, false, false, 112), "Y-m-d H:i"), "html", null, true);
            yield "
              ";
        } else {
            // line 114
            yield "                &mdash;
              ";
        }
        // line 116
        yield "            </span>
          </div>

          <div class=\"meta-item\">
            <span class=\"meta-label\">Categoria</span>
            <span class=\"meta-value\">";
        // line 121
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 121, $this->source); })()), "categoria", [], "any", false, false, false, 121)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 121, $this->source); })()), "categoria", [], "any", false, false, false, 121), "html", null, true)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "getCategoria", [], "method", true, true, false, 121)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 121, $this->source); })()), "getCategoria", [], "method", false, false, false, 121), "html", null, true)) : ("—"))));
        yield "</span>
          </div>
        </div>

        <div class=\"mt-3\">
          <div class=\"form-label text-muted mb-1\">Tag</div>
          ";
        // line 127
        $context["tags"] = ((array_key_exists("tags", $context)) ? ((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 127, $this->source); })())) : ([]));
        // line 128
        yield "          ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 128, $this->source); })())) > 0)) {
            // line 129
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 129, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 130
                yield "              <span class=\"badge bg-secondary me-1 mb-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            yield "          ";
        } else {
            // line 133
            yield "            <div class=\"text-muted\">Nessun tag</div>
          ";
        }
        // line 135
        yield "        </div>

        ";
        // line 137
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["prodotto"] ?? null), "descrizione", [], "any", true, true, false, 137) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 137, $this->source); })()), "descrizione", [], "any", false, false, false, 137))) {
            // line 138
            yield "          <div class=\"mt-3\">
            <div class=\"form-label text-muted mb-1\">Note</div>
            <div>";
            // line 140
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 140, $this->source); })()), "descrizione", [], "any", false, false, false, 140);
            yield "</div>
          </div>
        ";
        }
        // line 143
        yield "      </div>
    </div>
  </div>
</div>

";
        // line 149
        yield "<hr/>
<div class=\"mt-3\">
  <h4>Notifiche e stato prodotto</h4>
  <form method=\"post\" action=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_notifications", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152)]), "html", null, true);
        yield "\">
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"checkbox\" id=\"notifyEnabled\" name=\"notifyEnabled\" ";
        // line 154
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 154, $this->source); })()), "isNotifyEnabled", [], "method", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
      <label class=\"form-check-label\" for=\"notifyEnabled\">Abilita notifiche per questo prodotto</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"checkbox\" id=\"notifyEmail\" name=\"notifyEmail\" ";
        // line 158
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 158, $this->source); })()), "isNotifyEmail", [], "method", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
      <label class=\"form-check-label\" for=\"notifyEmail\">Ricevi notifiche via email</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"checkbox\" id=\"notifyBrowser\" name=\"notifyBrowser\" ";
        // line 162
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 162, $this->source); })()), "isNotifyBrowser", [], "method", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
      <label class=\"form-check-label\" for=\"notifyBrowser\">Ricevi notifiche da browser (push)</label>
    </div>
    <div class=\"form-check mt-2\">
      <input class=\"form-check-input\" type=\"checkbox\" id=\"isOpen\" name=\"isOpen\" ";
        // line 166
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["prodotto"]) || array_key_exists("prodotto", $context) ? $context["prodotto"] : (function () { throw new RuntimeError('Variable "prodotto" does not exist.', 166, $this->source); })()), "isOpen", [], "method", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
      <label class=\"form-check-label\" for=\"isOpen\">Imposta prodotto come aperto (scadenza = oggi + 4 giorni)</label>
    </div>
    <div class=\"mt-3\">
      <button class=\"btn btn-primary btn-sm\" type=\"submit\">Salva impostazioni</button>
    </div>
  </form>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "prodotto/show.html.twig";
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
        return array (  382 => 166,  375 => 162,  368 => 158,  361 => 154,  356 => 152,  351 => 149,  344 => 143,  338 => 140,  334 => 138,  332 => 137,  328 => 135,  324 => 133,  321 => 132,  312 => 130,  307 => 129,  304 => 128,  302 => 127,  293 => 121,  286 => 116,  282 => 114,  276 => 112,  274 => 111,  269 => 110,  267 => 109,  259 => 103,  255 => 101,  249 => 99,  247 => 98,  242 => 97,  240 => 96,  231 => 90,  223 => 85,  219 => 84,  209 => 77,  205 => 76,  198 => 72,  187 => 64,  183 => 63,  177 => 59,  164 => 58,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ prodotto.nome }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
      .product-card {
        max-width: 900px;
        margin: 1.5rem auto;
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
    </style>
{% endblock %}

{% block body %}
<div class=\"product-card\">
  <div class=\"d-flex justify-content-between align-items-start mb-2\">
    <h1 class=\"h4 mb-0\">Scheda Prodotto</h1>
    <div>
      <a class=\"btn btn-sm btn-outline-secondary me-1\" href=\"{{ path('app_prodotto_index') }}\">← Lista</a>
      <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_prodotto_edit', {'id': prodotto.id}) }}\">Modifica</a>
    </div>
  </div>

  <div class=\"card shadow-sm p-3\">
    <div class=\"product-identity\">
      <div>
        <div class=\"emoji-big\" aria-hidden=\"true\">
          {{ prodotto.emoji ? prodotto.emoji : (prodotto.getEmoji() is defined ? prodotto.getEmoji() : '🍽️') }}
        </div>

        <div class=\"mt-2 text-center d-flex justify-content-center align-items-center gap-2\">
          <span class=\"color-swatch\" title=\"{{ prodotto.colore ?: (prodotto.getColore() is defined ? prodotto.getColore() : '#ffffff') }}\"
                style=\"background: {{ prodotto.colore ?: (prodotto.getColore() is defined ? prodotto.getColore() : '#ffffff') }};\">
          </span>
          <small class=\"text-muted\">Colore</small>
        </div>
      </div>

      <div>
        <h2 class=\"h5 mb-1\">{{ prodotto.nome }}</h2>
        <div class=\"text-muted mb-2\">{{ prodotto.categoria ?: (prodotto.getCategoria() is defined ? prodotto.getCategoria() : '—') }}</div>

        <div class=\"meta-grid\">
          <div class=\"meta-item\">
            <span class=\"meta-label\">Quantità</span>
            <span class=\"meta-value\">{{ prodotto.quantita is defined ? prodotto.quantita : (prodotto.getQuantita() is defined ? prodotto.getQuantita() : '—') }}</span>
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
            <span class=\"meta-value\">{{ prodotto.categoria ?: (prodotto.getCategoria() is defined ? prodotto.getCategoria() : '—') }}</span>
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

{# --- Qui sotto la form per notifiche e stato prodotto (posta alle route implementate) --- #}
<hr/>
<div class=\"mt-3\">
  <h4>Notifiche e stato prodotto</h4>
  <form method=\"post\" action=\"{{ path('app_prodotto_notifications', {'id': prodotto.id}) }}\">
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"checkbox\" id=\"notifyEnabled\" name=\"notifyEnabled\" {{ prodotto.isNotifyEnabled() ? 'checked' : '' }}>
      <label class=\"form-check-label\" for=\"notifyEnabled\">Abilita notifiche per questo prodotto</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"checkbox\" id=\"notifyEmail\" name=\"notifyEmail\" {{ prodotto.isNotifyEmail() ? 'checked' : '' }}>
      <label class=\"form-check-label\" for=\"notifyEmail\">Ricevi notifiche via email</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"checkbox\" id=\"notifyBrowser\" name=\"notifyBrowser\" {{ prodotto.isNotifyBrowser() ? 'checked' : '' }}>
      <label class=\"form-check-label\" for=\"notifyBrowser\">Ricevi notifiche da browser (push)</label>
    </div>
    <div class=\"form-check mt-2\">
      <input class=\"form-check-input\" type=\"checkbox\" id=\"isOpen\" name=\"isOpen\" {{ prodotto.isOpen() ? 'checked' : '' }}>
      <label class=\"form-check-label\" for=\"isOpen\">Imposta prodotto come aperto (scadenza = oggi + 4 giorni)</label>
    </div>
    <div class=\"mt-3\">
      <button class=\"btn btn-primary btn-sm\" type=\"submit\">Salva impostazioni</button>
    </div>
  </form>
</div>

{% endblock %}
", "prodotto/show.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\prodotto\\show.html.twig");
    }
}
