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

/* prodotto/index.html.twig */
class __TwigTemplate_a329a152f8d8bdb580bb48d770a0b4d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodotto/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodotto/index.html.twig"));

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

        yield "Prodotti";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<h1>Prodotti</h1>


<form id=\"sortForm\" method=\"get\" class=\"d-flex align-items-center gap-2 mb-3\">
  <label for=\"sortSelect\" class=\"form-label mb-0\">Ordina per:</label>

  <select id=\"sortSelect\" name=\"sort\" class=\"form-select form-select-sm\" style=\"width:auto;\">
    <option value=\"nome\"      ";
        // line 13
        yield ((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 13, $this->source); })()) == "nome")) ? ("selected") : (""));
        yield ">Nome</option>
    <option value=\"quantita\"  ";
        // line 14
        yield ((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 14, $this->source); })()) == "quantita")) ? ("selected") : (""));
        yield ">Quantità</option>
    <option value=\"createdAt\" ";
        // line 15
        yield ((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 15, $this->source); })()) == "createdAt")) ? ("selected") : (""));
        yield ">Data aggiunta</option>
    <option value=\"scadenza\"  ";
        // line 16
        yield ((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 16, $this->source); })()) == "scadenza")) ? ("selected") : (""));
        yield ">Scadenza</option>
    <option value=\"categoria\" ";
        // line 17
        yield ((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 17, $this->source); })()) == "categoria")) ? ("selected") : (""));
        yield ">Categoria</option>
  </select>

  <div class=\"input-group input-group-sm ms-3\" style=\"width:360px;\">
    <label for=\"qInput\" class=\"form-label mb-0 me-2\">Cerca:</label>
    <input id=\"qInput\" name=\"q\" type=\"search\" class=\"form-control form-control-sm\" placeholder=\"Nome, categoria o tag\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("current_q", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["current_q"]) || array_key_exists("current_q", $context) ? $context["current_q"] : (function () { throw new RuntimeError('Variable "current_q" does not exist.', 22, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" />
    <button type=\"submit\" class=\"btn btn-sm btn-outline-secondary\">🔍</button>
  </div>


  <input type=\"hidden\" name=\"dir\" id=\"dirInput\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("current_dir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 27, $this->source); })()), "asc")) : ("asc")), "html", null, true);
        yield "\">

  <button type=\"button\" id=\"toggleDir\" class=\"btn btn-sm btn-outline-secondary\" title=\"Inverti ordine\">
    ";
        // line 30
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 30, $this->source); })())) == "desc")) {
            // line 31
            yield "      <i class=\"bi bi-sort-alpha-down-alt\"></i> 🔻
    ";
        } else {
            // line 33
            yield "      <i class=\"bi bi-sort-alpha-down\"></i> 🔺
    ";
        }
        // line 35
        yield "  </button>
</form>

<div>
  <table class=\"table table-striped align-middle\">
      <thead>
          <tr>
              <th style=\"width:40px;\">
                <input type=\"checkbox\" id=\"selectAll\" title=\"Seleziona tutti\">
              </th>
              <th style=\"width:56px; text-align:center;\">Emoji</th>
              <th>Nome</th>
              <th style=\"width:110px;\">Quantità</th>
              <th style=\"width:160px;\">Data di creazione</th>
              <th style=\"width:120px;\">Scadenza</th>
              <th style=\"width:140px;\">Categoria</th>
              <th style=\"width:120px;\">Colore</th>
              <th>Tag</th>
              <th class=\"text-end\" style=\"white-space:nowrap;\">Actions</th>
          </tr>
      </thead>
      <tbody>
      ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prodotti"]) || array_key_exists("prodotti", $context) ? $context["prodotti"] : (function () { throw new RuntimeError('Variable "prodotti" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["prodotto"]) {
            // line 58
            yield "          <tr>
              <td>
                <input type=\"checkbox\" class=\"select-checkbox\" value=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" aria-label=\"Seleziona ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", false, false, false, 60), "html", null, true);
            yield "\">
              </td>

              ";
            // line 64
            yield "              <td style=\"text-align:center; font-size:20px;\">
                ";
            // line 65
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "emoji", [], "any", true, true, false, 65) && CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "emoji", [], "any", false, false, false, 65))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "emoji", [], "any", false, false, false, 65), "html", null, true)) : ("—"));
            yield "
              </td>

              <td>";
            // line 68
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", true, true, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", false, false, false, 68), "html", null, true)) : (""));
            yield "</td>

              <td>";
            // line 70
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "quantita", [], "any", true, true, false, 70)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "quantita", [], "any", false, false, false, 70), "html", null, true)) : (0));
            yield "</td>

              <td>
                ";
            // line 73
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "createdAt", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "createdAt", [], "any", false, false, false, 74), "Y-m-d H:i"), "html", null, true);
                yield "
                ";
            } else {
                // line 76
                yield "                  —
                ";
            }
            // line 78
            yield "              </td>

              <td>
                ";
            // line 81
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "scadenza", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "scadenza", [], "any", false, false, false, 82), "Y-m-d"), "html", null, true);
                yield "
                ";
            } else {
                // line 84
                yield "                  —
                ";
            }
            // line 86
            yield "              </td>

              <td>";
            // line 88
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "categoria", [], "any", true, true, false, 88)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "categoria", [], "any", false, false, false, 88), "html", null, true)) : (""));
            yield "</td>

              <td>
\t\t\t\t";
            // line 91
            $context["hex"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "colore", [], "any", true, true, false, 91) && CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "colore", [], "any", false, false, false, 91))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "colore", [], "any", false, false, false, 91)) : ("#ffffff"));
            // line 92
            yield "\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t  <div
\t\t\t\t\tclass=\"color-swatch\"
\t\t\t\t\tstyle=\"background: ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 95, $this->source); })()), "html", null, true);
            yield ";\"
\t\t\t\t\ttitle=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 96, $this->source); })()), "html", null, true);
            yield "\"
\t\t\t\t\trole=\"img\"
\t\t\t\t\taria-label=\"Colore ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 98, $this->source); })()), "html", null, true);
            yield "\">
\t\t\t\t  </div>
\t\t\t\t  <span class=\"visually-hidden\">Colore ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hex"]) || array_key_exists("hex", $context) ? $context["hex"] : (function () { throw new RuntimeError('Variable "hex" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "</span>
\t\t\t\t</div>
              </td>

              <td>
                ";
            // line 105
            $context["tags"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "tags", [], "any", true, true, false, 105)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "tags", [], "any", false, false, false, 105)) : ([]));
            // line 106
            yield "\t\t\t\t";
            if ((array_key_exists("tags", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 106, $this->source); })())) > 0))) {
                // line 107
                yield "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 107, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 108
                    yield "\t\t\t\t\t\t<span class=\"badge bg-secondary me-1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["tag"]), "html", null, true);
                    yield "</span>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                yield "\t\t\t\t";
            } else {
                // line 111
                yield "\t\t\t\t\t<span class=\"text-muted\">Nessun tag</span>
                ";
            }
            // line 113
            yield "              </td>

              <td class=\"text-end\" style=\"white-space:nowrap;\">
                <a href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary me-1\" title=\"Mostra\">
                  <i class=\"bi bi-eye\"></i> 🔍
                </a>

                <a href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary me-1\" title=\"Modifica\">
                  <i class=\"bi bi-pencil\"></i> 📝
                </a>

                <form method=\"post\" action=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            yield "\" class=\"d-inline\" style=\"display:inline;\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 125))), "html", null, true);
            yield "\">
                  <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" data-confirm=\"Sei sicuro di eliminare '";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", false, false, false, 126), "html", null, true);
            yield "'?\">
                    <i class=\"bi bi-trash\"></i> 💣
                  </button>
                </form>
              </td>
          </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 132
        if (!$context['_iterated']) {
            // line 133
            yield "          <tr>
              <td colspan=\"10\">Nessun prodotto trovato</td>
          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prodotto'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "      </tbody>
  </table>
</div>


<div class=\"d-flex align-items-center gap-2\">
  <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_new");
        yield "\" class=\"btn btn-primary\">Crea nuovo prodotto</a>

  ";
        // line 145
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["prodotti"]) || array_key_exists("prodotti", $context) ? $context["prodotti"] : (function () { throw new RuntimeError('Variable "prodotti" does not exist.', 145, $this->source); })())) > 0)) {
            // line 146
            yield "    <form method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_delete_all");
            yield "\" style=\"display:inline;\" class=\"d-inline ms-2\">
      <input type=\"hidden\" name=\"_token\" value=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_all_products"), "html", null, true);
            yield "\">
      <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" data-confirm=\"Sei sicuro di eliminare TUTTI i prodotti e le relative stock entry? Questa operazione è irreversibile.\">
        <i class=\"bi bi-trash-fill\"></i> Elimina tutti
      </button>
    </form>
  ";
        }
        // line 153
        yield "
  <button id=\"deleteSelectedBtn\" type=\"button\" class=\"btn btn-sm btn-danger ms-auto\" disabled>
    <i class=\"bi bi-trash\"></i> Elimina selezionati
  </button>
</div>

<form id=\"bulkDeleteForm\" method=\"post\" action=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_delete_selected");
        yield "\" style=\"display:none;\">
  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_selected_products"), "html", null, true);
        yield "\">
</form>

<script>
document.addEventListener('DOMContentLoaded', function(){
  const selectAll = document.getElementById('selectAll');
  const checkboxes = Array.from(document.querySelectorAll('.select-checkbox'));
  const deleteBtn = document.getElementById('deleteSelectedBtn');
  const bulkForm = document.getElementById('bulkDeleteForm');

  function updateState() {
    const selected = document.querySelectorAll('.select-checkbox:checked').length;
    deleteBtn.disabled = selected === 0;
    deleteBtn.dataset.count = selected;
    deleteBtn.innerHTML = '<i class=\"bi bi-trash\"></i> Elimina selezionati' + (selected ? ' ('+selected+')' : '');
    if (!selectAll) return;
    if (selected === 0) selectAll.checked = false;
    else if (selected === checkboxes.length) { selectAll.checked = true; selectAll.indeterminate = false; }
    else { selectAll.checked = false; selectAll.indeterminate = true; }
  }

  updateState();

  if (selectAll) {
    selectAll.addEventListener('change', function(){
      const checked = !!this.checked;
      checkboxes.forEach(cb => { cb.checked = checked; });
      updateState();
    });
  }

  checkboxes.forEach(cb => cb.addEventListener('change', updateState));

  deleteBtn.addEventListener('click', function(e){
    const count = parseInt(this.dataset.count || 0, 10);
    if (count <= 0) return;
    const msg = `Sei sicuro di eliminare \${count} prodotto\${count>1?'i':''}? Questa operazione è irreversibile.`;
    if (!confirm(msg)) return;

    Array.from(bulkForm.querySelectorAll('input[name=\"selected_ids[]\"]')).forEach(n => n.remove());

    const selectedBoxes = Array.from(document.querySelectorAll('.select-checkbox:checked'));
    selectedBoxes.forEach(cb => {
      const input = document.createElement('input');
      input.type = 'hidden';
      input.name = 'selected_ids[]';
      input.value = cb.value;
      bulkForm.appendChild(input);
    });

    bulkForm.submit();
  });
});

document.addEventListener('DOMContentLoaded', function(){
  const sortSelect = document.getElementById('sortSelect');
  const dirInput = document.getElementById('dirInput');
  const toggleBtn = document.getElementById('toggleDir');
  const form = document.getElementById('sortForm');

  if (sortSelect) {
    sortSelect.addEventListener('change', function(){ form.submit(); });
  }

  if (toggleBtn) {
    toggleBtn.addEventListener('click', function(){
      const cur = (dirInput.value || 'asc').toLowerCase();
      dirInput.value = (cur === 'asc') ? 'desc' : 'asc';
      form.submit();
    });
  }
});
</script>

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
        return "prodotto/index.html.twig";
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
        return array (  402 => 160,  398 => 159,  390 => 153,  381 => 147,  376 => 146,  374 => 145,  369 => 143,  361 => 137,  352 => 133,  350 => 132,  339 => 126,  335 => 125,  331 => 124,  324 => 120,  317 => 116,  312 => 113,  308 => 111,  305 => 110,  296 => 108,  291 => 107,  288 => 106,  286 => 105,  278 => 100,  273 => 98,  268 => 96,  264 => 95,  259 => 92,  257 => 91,  251 => 88,  247 => 86,  243 => 84,  237 => 82,  235 => 81,  230 => 78,  226 => 76,  220 => 74,  218 => 73,  212 => 70,  207 => 68,  201 => 65,  198 => 64,  190 => 60,  186 => 58,  181 => 57,  157 => 35,  153 => 33,  149 => 31,  147 => 30,  141 => 27,  133 => 22,  125 => 17,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Prodotti{% endblock %}

{% block body %}
<h1>Prodotti</h1>


<form id=\"sortForm\" method=\"get\" class=\"d-flex align-items-center gap-2 mb-3\">
  <label for=\"sortSelect\" class=\"form-label mb-0\">Ordina per:</label>

  <select id=\"sortSelect\" name=\"sort\" class=\"form-select form-select-sm\" style=\"width:auto;\">
    <option value=\"nome\"      {{ current_sort == 'nome' ? 'selected' : '' }}>Nome</option>
    <option value=\"quantita\"  {{ current_sort == 'quantita' ? 'selected' : '' }}>Quantità</option>
    <option value=\"createdAt\" {{ current_sort == 'createdAt' ? 'selected' : '' }}>Data aggiunta</option>
    <option value=\"scadenza\"  {{ current_sort == 'scadenza' ? 'selected' : '' }}>Scadenza</option>
    <option value=\"categoria\" {{ current_sort == 'categoria' ? 'selected' : '' }}>Categoria</option>
  </select>

  <div class=\"input-group input-group-sm ms-3\" style=\"width:360px;\">
    <label for=\"qInput\" class=\"form-label mb-0 me-2\">Cerca:</label>
    <input id=\"qInput\" name=\"q\" type=\"search\" class=\"form-control form-control-sm\" placeholder=\"Nome, categoria o tag\" value=\"{{ current_q|default('') }}\" />
    <button type=\"submit\" class=\"btn btn-sm btn-outline-secondary\">🔍</button>
  </div>


  <input type=\"hidden\" name=\"dir\" id=\"dirInput\" value=\"{{ current_dir|default('asc') }}\">

  <button type=\"button\" id=\"toggleDir\" class=\"btn btn-sm btn-outline-secondary\" title=\"Inverti ordine\">
    {% if current_dir|lower == 'desc' %}
      <i class=\"bi bi-sort-alpha-down-alt\"></i> 🔻
    {% else %}
      <i class=\"bi bi-sort-alpha-down\"></i> 🔺
    {% endif %}
  </button>
</form>

<div>
  <table class=\"table table-striped align-middle\">
      <thead>
          <tr>
              <th style=\"width:40px;\">
                <input type=\"checkbox\" id=\"selectAll\" title=\"Seleziona tutti\">
              </th>
              <th style=\"width:56px; text-align:center;\">Emoji</th>
              <th>Nome</th>
              <th style=\"width:110px;\">Quantità</th>
              <th style=\"width:160px;\">Data di creazione</th>
              <th style=\"width:120px;\">Scadenza</th>
              <th style=\"width:140px;\">Categoria</th>
              <th style=\"width:120px;\">Colore</th>
              <th>Tag</th>
              <th class=\"text-end\" style=\"white-space:nowrap;\">Actions</th>
          </tr>
      </thead>
      <tbody>
      {% for prodotto in prodotti %}
          <tr>
              <td>
                <input type=\"checkbox\" class=\"select-checkbox\" value=\"{{ prodotto.id }}\" aria-label=\"Seleziona {{ prodotto.nome }}\">
              </td>

              {# Emoji: grande, centrata #}
              <td style=\"text-align:center; font-size:20px;\">
                {{ prodotto.emoji is defined and prodotto.emoji ? prodotto.emoji : '—' }}
              </td>

              <td>{{ prodotto.nome is defined ? prodotto.nome : '' }}</td>

              <td>{{ prodotto.quantita is defined ? prodotto.quantita : 0 }}</td>

              <td>
                {% if prodotto.createdAt %}
                  {{ prodotto.createdAt|date('Y-m-d H:i') }}
                {% else %}
                  —
                {% endif %}
              </td>

              <td>
                {% if prodotto.scadenza %}
                  {{ prodotto.scadenza|date('Y-m-d') }}
                {% else %}
                  —
                {% endif %}
              </td>

              <td>{{ prodotto.categoria is defined ? prodotto.categoria : '' }}</td>

              <td>
\t\t\t\t{% set hex = prodotto.colore is defined and prodotto.colore ? prodotto.colore : '#ffffff' %}
\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t  <div
\t\t\t\t\tclass=\"color-swatch\"
\t\t\t\t\tstyle=\"background: {{ hex }};\"
\t\t\t\t\ttitle=\"{{ hex }}\"
\t\t\t\t\trole=\"img\"
\t\t\t\t\taria-label=\"Colore {{ hex }}\">
\t\t\t\t  </div>
\t\t\t\t  <span class=\"visually-hidden\">Colore {{ hex }}</span>
\t\t\t\t</div>
              </td>

              <td>
                {% set tags = prodotto.tags is defined ? prodotto.tags : [] %}
\t\t\t\t{% if tags is defined and tags|length > 0 %}
\t\t\t\t\t{% for tag in tags %}
\t\t\t\t\t\t<span class=\"badge bg-secondary me-1\">{{ tag|capitalize }}</span>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% else %}
\t\t\t\t\t<span class=\"text-muted\">Nessun tag</span>
                {% endif %}
              </td>

              <td class=\"text-end\" style=\"white-space:nowrap;\">
                <a href=\"{{ path('app_prodotto_show', {'id': prodotto.id}) }}\" class=\"btn btn-sm btn-outline-primary me-1\" title=\"Mostra\">
                  <i class=\"bi bi-eye\"></i> 🔍
                </a>

                <a href=\"{{ path('app_prodotto_edit', {'id': prodotto.id}) }}\" class=\"btn btn-sm btn-outline-secondary me-1\" title=\"Modifica\">
                  <i class=\"bi bi-pencil\"></i> 📝
                </a>

                <form method=\"post\" action=\"{{ path('app_prodotto_delete', {'id': prodotto.id}) }}\" class=\"d-inline\" style=\"display:inline;\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ prodotto.id) }}\">
                  <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" data-confirm=\"Sei sicuro di eliminare '{{ prodotto.nome }}'?\">
                    <i class=\"bi bi-trash\"></i> 💣
                  </button>
                </form>
              </td>
          </tr>
      {% else %}
          <tr>
              <td colspan=\"10\">Nessun prodotto trovato</td>
          </tr>
      {% endfor %}
      </tbody>
  </table>
</div>


<div class=\"d-flex align-items-center gap-2\">
  <a href=\"{{ path('app_prodotto_new') }}\" class=\"btn btn-primary\">Crea nuovo prodotto</a>

  {% if prodotti|length > 0 %}
    <form method=\"post\" action=\"{{ path('app_prodotto_delete_all') }}\" style=\"display:inline;\" class=\"d-inline ms-2\">
      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_all_products') }}\">
      <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" data-confirm=\"Sei sicuro di eliminare TUTTI i prodotti e le relative stock entry? Questa operazione è irreversibile.\">
        <i class=\"bi bi-trash-fill\"></i> Elimina tutti
      </button>
    </form>
  {% endif %}

  <button id=\"deleteSelectedBtn\" type=\"button\" class=\"btn btn-sm btn-danger ms-auto\" disabled>
    <i class=\"bi bi-trash\"></i> Elimina selezionati
  </button>
</div>

<form id=\"bulkDeleteForm\" method=\"post\" action=\"{{ path('app_prodotto_delete_selected') }}\" style=\"display:none;\">
  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_selected_products') }}\">
</form>

<script>
document.addEventListener('DOMContentLoaded', function(){
  const selectAll = document.getElementById('selectAll');
  const checkboxes = Array.from(document.querySelectorAll('.select-checkbox'));
  const deleteBtn = document.getElementById('deleteSelectedBtn');
  const bulkForm = document.getElementById('bulkDeleteForm');

  function updateState() {
    const selected = document.querySelectorAll('.select-checkbox:checked').length;
    deleteBtn.disabled = selected === 0;
    deleteBtn.dataset.count = selected;
    deleteBtn.innerHTML = '<i class=\"bi bi-trash\"></i> Elimina selezionati' + (selected ? ' ('+selected+')' : '');
    if (!selectAll) return;
    if (selected === 0) selectAll.checked = false;
    else if (selected === checkboxes.length) { selectAll.checked = true; selectAll.indeterminate = false; }
    else { selectAll.checked = false; selectAll.indeterminate = true; }
  }

  updateState();

  if (selectAll) {
    selectAll.addEventListener('change', function(){
      const checked = !!this.checked;
      checkboxes.forEach(cb => { cb.checked = checked; });
      updateState();
    });
  }

  checkboxes.forEach(cb => cb.addEventListener('change', updateState));

  deleteBtn.addEventListener('click', function(e){
    const count = parseInt(this.dataset.count || 0, 10);
    if (count <= 0) return;
    const msg = `Sei sicuro di eliminare \${count} prodotto\${count>1?'i':''}? Questa operazione è irreversibile.`;
    if (!confirm(msg)) return;

    Array.from(bulkForm.querySelectorAll('input[name=\"selected_ids[]\"]')).forEach(n => n.remove());

    const selectedBoxes = Array.from(document.querySelectorAll('.select-checkbox:checked'));
    selectedBoxes.forEach(cb => {
      const input = document.createElement('input');
      input.type = 'hidden';
      input.name = 'selected_ids[]';
      input.value = cb.value;
      bulkForm.appendChild(input);
    });

    bulkForm.submit();
  });
});

document.addEventListener('DOMContentLoaded', function(){
  const sortSelect = document.getElementById('sortSelect');
  const dirInput = document.getElementById('dirInput');
  const toggleBtn = document.getElementById('toggleDir');
  const form = document.getElementById('sortForm');

  if (sortSelect) {
    sortSelect.addEventListener('change', function(){ form.submit(); });
  }

  if (toggleBtn) {
    toggleBtn.addEventListener('click', function(){
      const cur = (dirInput.value || 'asc').toLowerCase();
      dirInput.value = (cur === 'asc') ? 'desc' : 'asc';
      form.submit();
    });
  }
});
</script>

{% endblock %}
", "prodotto/index.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\prodotto\\index.html.twig");
    }
}
