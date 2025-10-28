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

/* scadenze/index.html.twig */
class __TwigTemplate_8dd6cafc777c36a30d8f9ae311ffcb99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scadenze/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scadenze/index.html.twig"));

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

        yield "Scadenze (entro ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 3, $this->source); })()), "html", null, true);
        yield " giorni)
  <hr/>
  <div class=\"mt-4\">
    <h4>Impostazioni notifiche</h4>
    <form method=\"post\" class=\"row g-2\">
      <div class=\"col-auto\">
        <label for=\"notificationEmail\" class=\"form-label mb-0\">Email per notifiche</label>
        <input id=\"notificationEmail\" name=\"notification_email\" type=\"email\" class=\"form-control form-control-sm\" placeholder=\"es. nome@esempio.com\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("notification_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["notification_email"]) || array_key_exists("notification_email", $context) ? $context["notification_email"] : (function () { throw new RuntimeError('Variable "notification_email" does not exist.', 10, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" />
      </div>
      <div class=\"col-auto align-self-end\">
        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Salva</button>
      </div>
    </form>
    <div class=\"form-text mt-2\">Inserisci l'email alla quale vuoi ricevere le notifiche di scadenza.</div>
  </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 21
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

        // line 22
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <style>
    .hero-count {
      display:flex;
      align-items:center;
      gap:1rem;
      margin-bottom:1rem;
    }
\t.big-count-number {
\t  font-size: clamp(64px, 10vw, 160px);
\t  font-weight: 900;
\t  line-height: 0.95;
\t  display:inline-flex;
\t  align-items:center;
\t  justify-content:center;
\t  min-width: 120px;
\t  min-height: 120px;
\t  //padding: 0.15rem 0.6rem;
\t  letter-spacing: -1px;
\t  -webkit-font-smoothing:antialiased;
\t  -moz-osx-font-smoothing:grayscale;
\t  text-shadow: 0 2px 0 rgba(255,255,255,0.07), 0 10px 30px rgba(0,0,0,0.12);
\t}
\t@media (max-width:640px) {
\t  .big-count-number {
\t\tfont-size: clamp(48px, 16vw, 96px);
\t\tmin-width: 88px;
\t\tmin-height: 88px;
\t  }
\t}

    .small-metrics { color:#6c757d; }
    .expiry-badge { padding:.35rem .5rem; border-radius:8px; font-weight:600; }
    .expiry-badge.expired { background:#e74c3c; color:#fff; }
    .expiry-badge.soon { background:#f39c12; color:#fff; }
    .expiry-badge.ok { background:#6bbf59; color:#fff; }
    .tbl-row-expired { background: rgba(231,76,60,0.06); }
    .tbl-row-soon { background: rgba(243,156,18,0.04); }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
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

        // line 64
        yield "<div class=\"container\" style=\"max-width:1100px; margin:1.2rem auto;\">
  <div class=\"d-flex justify-content-between align-items-start mb-3\">
    <div>
      <h1 class=\"h4 mb-1\">Scadenze (entro ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 67, $this->source); })()), "html", null, true);
        yield " giorni)</h1>
      <div class=\"small text-muted\">Elenco delle stock entry in scadenza. Filtra il range con il controllo sotto.</div>
    </div>

";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "flashes", [], "any", false, false, false, 72));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 73
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 74
                yield "    <div class=\"alert alert-";
                yield ((($context["label"] == "danger")) ? ("danger") : (((($context["label"] == "success")) ? ("success") : ("info"))));
                yield " alert-dismissible fade show\" role=\"alert\">
      ";
                // line 75
                yield $context["msg"];
                yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "

    <div class=\"text-end hero-count\">
\t\t<div class=\"big-count-number\"
\t\t\t style=\"color: ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("bigCountTextColor", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["bigCountTextColor"]) || array_key_exists("bigCountTextColor", $context) ? $context["bigCountTextColor"] : (function () { throw new RuntimeError('Variable "bigCountTextColor" does not exist.', 84, $this->source); })()), "#222")) : ("#222")), "html", null, true);
        yield " !important; line-height:1; -webkit-text-stroke: 0.4px rgba(0,0,0,0.06);\">
\t\t  <span style=\"color: ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("bigCountColor", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["bigCountColor"]) || array_key_exists("bigCountColor", $context) ? $context["bigCountColor"] : (function () { throw new RuntimeError('Variable "bigCountColor" does not exist.', 85, $this->source); })()), "#333")) : ("#333")), "html", null, true);
        yield ";\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expiring_next_3_unique_products"]) || array_key_exists("expiring_next_3_unique_products", $context) ? $context["expiring_next_3_unique_products"] : (function () { throw new RuntimeError('Variable "expiring_next_3_unique_products" does not exist.', 85, $this->source); })()), "html", null, true);
        yield "</span>
\t\t</div>

      <div class=\"small-metrics\">
        <div class=\"fw-bold\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expiring_next_3_entries"]) || array_key_exists("expiring_next_3_entries", $context) ? $context["expiring_next_3_entries"] : (function () { throw new RuntimeError('Variable "expiring_next_3_entries" does not exist.', 89, $this->source); })()), "html", null, true);
        yield " voci in scadenza (3 giorni)</div>
        <div class=\"text-muted\">Prodotti distinti in scadenza: <strong>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expiring_next_3_unique_products"]) || array_key_exists("expiring_next_3_unique_products", $context) ? $context["expiring_next_3_unique_products"] : (function () { throw new RuntimeError('Variable "expiring_next_3_unique_products" does not exist.', 90, $this->source); })()), "html", null, true);
        yield "</strong></div>
      </div>
    </div>
  </div>

  <div class=\"card p-3 mb-3\">
    <form method=\"get\" class=\"row gx-2 gy-2 align-items-center\">
      <div class=\"col-auto\">
        <label for=\"days\" class=\"form-label mb-0 small\">Mostra entro (giorni)</label>
        <input id=\"days\" name=\"days\" type=\"number\" class=\"form-control\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 99, $this->source); })()), "html", null, true);
        yield "\" min=\"1\" style=\"width:120px\" />
      </div>
      <div class=\"col-auto\">
        <label class=\"form-label mb-0 small\">&nbsp;</label>
        <div><button type=\"submit\" class=\"btn btn-primary\">Aggiorna</button></div>
      </div>

      <div class=\"col\"></div>

      <div class=\"col-auto text-end\">
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_index");
        yield "\">Torna ai prodotti</a>
      </div>
    </form>
  </div>

  ";
        // line 114
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 114, $this->source); })()))) {
            // line 115
            yield "    <div class=\"alert alert-info\">Nessuna scadenza trovata nei prossimi ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 115, $this->source); })()), "html", null, true);
            yield " giorni.</div>
  ";
        } else {
            // line 117
            yield "    <div class=\"table-responsive\">
      <table class=\"table align-middle\">
        <thead>
          <tr>
            <th>Prodotto</th>
            <th>Categoria</th>
            <th>Tag</th>
            <th>Quantità</th>
            <th>Scadenza</th>
            <th>Gg restanti</th>
            <th>Azioni</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 131, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 132
                yield "            ";
                $context["daysTo"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "daysTo", [], "any", true, true, false, 132) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["e"], "daysTo", [], "any", false, false, false, 132)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["e"], "daysTo", [], "any", false, false, false, 132)) : (9999));
                // line 133
                yield "            ";
                $context["rowClass"] = ((((isset($context["daysTo"]) || array_key_exists("daysTo", $context) ? $context["daysTo"] : (function () { throw new RuntimeError('Variable "daysTo" does not exist.', 133, $this->source); })()) < 0)) ? ("tbl-row-expired") : (((((isset($context["daysTo"]) || array_key_exists("daysTo", $context) ? $context["daysTo"] : (function () { throw new RuntimeError('Variable "daysTo" does not exist.', 133, $this->source); })()) <= 3)) ? ("tbl-row-soon") : (""))));
                // line 134
                yield "            <tr class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 134, $this->source); })()), "html", null, true);
                yield "\">
              <td>
                <div class=\"d-flex align-items-center gap-3\">
                  <div>
                    <strong>";
                // line 138
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, true, false, 138), "getNome", [], "any", true, true, false, 138)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 138), "getNome", [], "method", false, false, false, 138), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 138), "nome", [], "any", false, false, false, 138), "html", null, true)))) : ("—"));
                yield "</strong>
                    <div class=\"small text-muted\">";
                // line 139
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, true, false, 139), "getDescrizione", [], "any", true, true, false, 139)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 139), "getDescrizione", [], "method", false, false, false, 139))), 0, 80), "html", null, true)) : (""))) : (""));
                yield "</div>
                  </div>
                </div>
              </td>

              <td>
                ";
                // line 145
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categoria", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 146
                    yield "                  <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categoria", [], "any", false, false, false, 146), "html", null, true);
                    yield "</span>
                ";
                } else {
                    // line 148
                    yield "                  <span class=\"text-muted\">Nessuna Categoria</span>
                ";
                }
                // line 150
                yield "              </td>

\t\t\t\t<td>
\t\t\t\t  ";
                // line 153
                $context["tags"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "tags", [], "any", true, true, false, 153)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["e"], "tags", [], "any", false, false, false, 153)) : ([]));
                // line 154
                yield "\t\t\t\t  ";
                if ((is_iterable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 154, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 154, $this->source); })())) > 0))) {
                    // line 155
                    yield "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 155, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                        // line 156
                        yield "\t\t\t\t\t  <span class=\"badge bg-secondary me-1\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
                        yield "</span>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    yield "\t\t\t\t  ";
                } else {
                    // line 159
                    yield "\t\t\t\t\t<span class=\"text-muted\">Nessun tag</span>
\t\t\t\t  ";
                }
                // line 161
                yield "\t\t\t\t</td>

              <td>";
                // line 163
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "quantita", [], "any", true, true, false, 163)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "quantita", [], "any", false, false, false, 163), "html", null, true)) : ("—"));
                yield "</td>
              <td>";
                // line 164
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "scadenza", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "scadenza", [], "any", false, false, false, 164), "html", null, true)) : ("—"));
                yield "</td>

              <td>
                ";
                // line 167
                if (((isset($context["daysTo"]) || array_key_exists("daysTo", $context) ? $context["daysTo"] : (function () { throw new RuntimeError('Variable "daysTo" does not exist.', 167, $this->source); })()) < 0)) {
                    // line 168
                    yield "                  <span class=\"expiry-badge expired\">Scaduto</span>
                ";
                } elseif ((                // line 169
(isset($context["daysTo"]) || array_key_exists("daysTo", $context) ? $context["daysTo"] : (function () { throw new RuntimeError('Variable "daysTo" does not exist.', 169, $this->source); })()) == 0)) {
                    // line 170
                    yield "                  <span class=\"expiry-badge soon\">Oggi</span>
                ";
                } elseif ((                // line 171
(isset($context["daysTo"]) || array_key_exists("daysTo", $context) ? $context["daysTo"] : (function () { throw new RuntimeError('Variable "daysTo" does not exist.', 171, $this->source); })()) == 1)) {
                    // line 172
                    yield "                  <span class=\"expiry-badge soon\">1 giorno</span>
                ";
                } elseif ((                // line 173
(isset($context["daysTo"]) || array_key_exists("daysTo", $context) ? $context["daysTo"] : (function () { throw new RuntimeError('Variable "daysTo" does not exist.', 173, $this->source); })()) <= 3)) {
                    // line 174
                    yield "                  <span class=\"expiry-badge soon\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysTo"]) || array_key_exists("daysTo", $context) ? $context["daysTo"] : (function () { throw new RuntimeError('Variable "daysTo" does not exist.', 174, $this->source); })()), "html", null, true);
                    yield " giorni</span>
                ";
                } else {
                    // line 176
                    yield "                  <span class=\"expiry-badge ok\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysTo"]) || array_key_exists("daysTo", $context) ? $context["daysTo"] : (function () { throw new RuntimeError('Variable "daysTo" does not exist.', 176, $this->source); })()), "html", null, true);
                    yield " giorni</span>
                ";
                }
                // line 178
                yield "              </td>

              <td>
                <a class=\"btn btn-sm btn-outline-primary\" href=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_show", ["id" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 181), "getId", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 181), "getId", [], "method", false, false, false, 181)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181)))) : (0))]), "html", null, true);
                yield "\">Dettaglio</a>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            yield "        </tbody>
      </table>
    </div>
  ";
        }
        // line 189
        yield "</div>

";
        // line 192
        yield "<hr class=\"my-4\" />
<div class=\"mt-4\">
  <h4>Impostazioni notifiche</h4>

  ";
        // line 197
        yield "  <form method=\"post\" class=\"row g-2\" novalidate>
    <div class=\"col-md-6\">
      <label for=\"notificationEmail\" class=\"form-label mb-0\">Email per notifiche</label>
      <input id=\"notificationEmail\"
             name=\"notification_email\"
             type=\"email\"
             class=\"form-control form-control-sm\"
             placeholder=\"es. nome@esempio.com\"
             value=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("notification_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["notification_email"]) || array_key_exists("notification_email", $context) ? $context["notification_email"] : (function () { throw new RuntimeError('Variable "notification_email" does not exist.', 205, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" />
    </div>

    <div class=\"col-auto align-self-end\">
      <button type=\"submit\" class=\"btn btn-primary btn-sm\">Salva</button>
    </div>
  </form>

  <div class=\"form-text mt-2\">Inserisci l'email alla quale vuoi ricevere le notifiche di scadenza.</div>
</div>
";
        // line 216
        yield "
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
        return "scadenze/index.html.twig";
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
        return array (  478 => 216,  465 => 205,  455 => 197,  449 => 192,  445 => 189,  439 => 185,  429 => 181,  424 => 178,  418 => 176,  412 => 174,  410 => 173,  407 => 172,  405 => 171,  402 => 170,  400 => 169,  397 => 168,  395 => 167,  389 => 164,  385 => 163,  381 => 161,  377 => 159,  374 => 158,  365 => 156,  360 => 155,  357 => 154,  355 => 153,  350 => 150,  346 => 148,  340 => 146,  338 => 145,  329 => 139,  325 => 138,  317 => 134,  314 => 133,  311 => 132,  307 => 131,  291 => 117,  285 => 115,  283 => 114,  275 => 109,  262 => 99,  250 => 90,  246 => 89,  237 => 85,  233 => 84,  227 => 80,  213 => 75,  208 => 74,  203 => 73,  199 => 72,  192 => 67,  187 => 64,  174 => 63,  122 => 22,  109 => 21,  88 => 10,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Scadenze (entro {{ days }} giorni)
  <hr/>
  <div class=\"mt-4\">
    <h4>Impostazioni notifiche</h4>
    <form method=\"post\" class=\"row g-2\">
      <div class=\"col-auto\">
        <label for=\"notificationEmail\" class=\"form-label mb-0\">Email per notifiche</label>
        <input id=\"notificationEmail\" name=\"notification_email\" type=\"email\" class=\"form-control form-control-sm\" placeholder=\"es. nome@esempio.com\" value=\"{{ notification_email|default('') }}\" />
      </div>
      <div class=\"col-auto align-self-end\">
        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Salva</button>
      </div>
    </form>
    <div class=\"form-text mt-2\">Inserisci l'email alla quale vuoi ricevere le notifiche di scadenza.</div>
  </div>

{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <style>
    .hero-count {
      display:flex;
      align-items:center;
      gap:1rem;
      margin-bottom:1rem;
    }
\t.big-count-number {
\t  font-size: clamp(64px, 10vw, 160px);
\t  font-weight: 900;
\t  line-height: 0.95;
\t  display:inline-flex;
\t  align-items:center;
\t  justify-content:center;
\t  min-width: 120px;
\t  min-height: 120px;
\t  //padding: 0.15rem 0.6rem;
\t  letter-spacing: -1px;
\t  -webkit-font-smoothing:antialiased;
\t  -moz-osx-font-smoothing:grayscale;
\t  text-shadow: 0 2px 0 rgba(255,255,255,0.07), 0 10px 30px rgba(0,0,0,0.12);
\t}
\t@media (max-width:640px) {
\t  .big-count-number {
\t\tfont-size: clamp(48px, 16vw, 96px);
\t\tmin-width: 88px;
\t\tmin-height: 88px;
\t  }
\t}

    .small-metrics { color:#6c757d; }
    .expiry-badge { padding:.35rem .5rem; border-radius:8px; font-weight:600; }
    .expiry-badge.expired { background:#e74c3c; color:#fff; }
    .expiry-badge.soon { background:#f39c12; color:#fff; }
    .expiry-badge.ok { background:#6bbf59; color:#fff; }
    .tbl-row-expired { background: rgba(231,76,60,0.06); }
    .tbl-row-soon { background: rgba(243,156,18,0.04); }
  </style>
{% endblock %}

{% block body %}
<div class=\"container\" style=\"max-width:1100px; margin:1.2rem auto;\">
  <div class=\"d-flex justify-content-between align-items-start mb-3\">
    <div>
      <h1 class=\"h4 mb-1\">Scadenze (entro {{ days }} giorni)</h1>
      <div class=\"small text-muted\">Elenco delle stock entry in scadenza. Filtra il range con il controllo sotto.</div>
    </div>

{# Flash messages #}
{% for label, messages in app.flashes %}
  {% for msg in messages %}
    <div class=\"alert alert-{{ label == 'danger' ? 'danger' : (label == 'success' ? 'success' : 'info') }} alert-dismissible fade show\" role=\"alert\">
      {{ msg|raw }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  {% endfor %}
{% endfor %}


    <div class=\"text-end hero-count\">
\t\t<div class=\"big-count-number\"
\t\t\t style=\"color: {{ bigCountTextColor|default('#222') }} !important; line-height:1; -webkit-text-stroke: 0.4px rgba(0,0,0,0.06);\">
\t\t  <span style=\"color: {{ bigCountColor|default('#333') }};\">{{ expiring_next_3_unique_products }}</span>
\t\t</div>

      <div class=\"small-metrics\">
        <div class=\"fw-bold\">{{ expiring_next_3_entries }} voci in scadenza (3 giorni)</div>
        <div class=\"text-muted\">Prodotti distinti in scadenza: <strong>{{ expiring_next_3_unique_products }}</strong></div>
      </div>
    </div>
  </div>

  <div class=\"card p-3 mb-3\">
    <form method=\"get\" class=\"row gx-2 gy-2 align-items-center\">
      <div class=\"col-auto\">
        <label for=\"days\" class=\"form-label mb-0 small\">Mostra entro (giorni)</label>
        <input id=\"days\" name=\"days\" type=\"number\" class=\"form-control\" value=\"{{ days }}\" min=\"1\" style=\"width:120px\" />
      </div>
      <div class=\"col-auto\">
        <label class=\"form-label mb-0 small\">&nbsp;</label>
        <div><button type=\"submit\" class=\"btn btn-primary\">Aggiorna</button></div>
      </div>

      <div class=\"col\"></div>

      <div class=\"col-auto text-end\">
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('app_prodotto_index') }}\">Torna ai prodotti</a>
      </div>
    </form>
  </div>

  {% if entries is empty %}
    <div class=\"alert alert-info\">Nessuna scadenza trovata nei prossimi {{ days }} giorni.</div>
  {% else %}
    <div class=\"table-responsive\">
      <table class=\"table align-middle\">
        <thead>
          <tr>
            <th>Prodotto</th>
            <th>Categoria</th>
            <th>Tag</th>
            <th>Quantità</th>
            <th>Scadenza</th>
            <th>Gg restanti</th>
            <th>Azioni</th>
          </tr>
        </thead>
        <tbody>
          {% for e in entries %}
            {% set daysTo = e.daysTo is defined and e.daysTo is not null ? e.daysTo : 9999 %}
            {% set rowClass = daysTo < 0 ? 'tbl-row-expired' : (daysTo <= 3 ? 'tbl-row-soon' : '') %}
            <tr class=\"{{ rowClass }}\">
              <td>
                <div class=\"d-flex align-items-center gap-3\">
                  <div>
                    <strong>{{ e.prodotto ? (e.prodotto.getNome is defined ? e.prodotto.getNome() : e.prodotto.nome) : '—' }}</strong>
                    <div class=\"small text-muted\">{{ e.prodotto ? (e.prodotto.getDescrizione is defined ? (e.prodotto.getDescrizione()|striptags|trim|slice(0,80)) : '') : '' }}</div>
                  </div>
                </div>
              </td>

              <td>
                {% if e.categoria %}
                  <span class=\"badge bg-secondary\">{{ e.categoria }}</span>
                {% else %}
                  <span class=\"text-muted\">Nessuna Categoria</span>
                {% endif %}
              </td>

\t\t\t\t<td>
\t\t\t\t  {% set tags = e.tags is defined ? e.tags : [] %}
\t\t\t\t  {% if tags is iterable and tags|length > 0 %}
\t\t\t\t\t{% for t in tags %}
\t\t\t\t\t  <span class=\"badge bg-secondary me-1\">{{ t }}</span>
\t\t\t\t\t{% endfor %}
\t\t\t\t  {% else %}
\t\t\t\t\t<span class=\"text-muted\">Nessun tag</span>
\t\t\t\t  {% endif %}
\t\t\t\t</td>

              <td>{{ e.quantita is defined ? e.quantita : '—' }}</td>
              <td>{{ e.scadenza ? e.scadenza : '—' }}</td>

              <td>
                {% if daysTo < 0 %}
                  <span class=\"expiry-badge expired\">Scaduto</span>
                {% elseif daysTo == 0 %}
                  <span class=\"expiry-badge soon\">Oggi</span>
                {% elseif daysTo == 1 %}
                  <span class=\"expiry-badge soon\">1 giorno</span>
                {% elseif daysTo <= 3 %}
                  <span class=\"expiry-badge soon\">{{ daysTo }} giorni</span>
                {% else %}
                  <span class=\"expiry-badge ok\">{{ daysTo }} giorni</span>
                {% endif %}
              </td>

              <td>
                <a class=\"btn btn-sm btn-outline-primary\" href=\"{{ path('app_prodotto_show', {'id': e.prodotto ? (e.prodotto.getId ? e.prodotto.getId() : e.prodotto.id) : 0}) }}\">Dettaglio</a>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  {% endif %}
</div>

{# --- Form impostazioni notifiche: sempre visibile sotto la lista --- #}
<hr class=\"my-4\" />
<div class=\"mt-4\">
  <h4>Impostazioni notifiche</h4>

  {# POST verso la stessa rotta; usiamo method=\"post\" semplice #}
  <form method=\"post\" class=\"row g-2\" novalidate>
    <div class=\"col-md-6\">
      <label for=\"notificationEmail\" class=\"form-label mb-0\">Email per notifiche</label>
      <input id=\"notificationEmail\"
             name=\"notification_email\"
             type=\"email\"
             class=\"form-control form-control-sm\"
             placeholder=\"es. nome@esempio.com\"
             value=\"{{ notification_email|default('') }}\" />
    </div>

    <div class=\"col-auto align-self-end\">
      <button type=\"submit\" class=\"btn btn-primary btn-sm\">Salva</button>
    </div>
  </form>

  <div class=\"form-text mt-2\">Inserisci l'email alla quale vuoi ricevere le notifiche di scadenza.</div>
</div>
{# --- fine form impostazioni notifiche --- #}

{% endblock %}
", "scadenze/index.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\scadenze\\index.html.twig");
    }
}
