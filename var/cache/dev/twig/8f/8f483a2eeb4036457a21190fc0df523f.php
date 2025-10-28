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

/* prodotto/_form.html.twig */
class __TwigTemplate_335683e103a69b004499ee05f7c692c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodotto/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodotto/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
  ";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'errors');
        yield "

  <div class=\"row g-3\">
    <div class=\"col-12\">
\t\t<div class=\"mb-0\">
\t\t  ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nome", [], "any", false, false, false, 7), 'label', ["label" => "Nome"]);
        yield "
\t\t  ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nome", [], "any", false, false, false, 8), 'widget', ["attr" => ["placeholder" => "Es: Latte, Farina, Uova", "class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nome", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "valid", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        // line 13
        yield "
\t\t  <div class=\"form-error\">
\t\t\t";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nome", [], "any", false, false, false, 15), 'errors');
        yield "
\t\t  </div>
\t\t</div>
    </div>

    <div class=\"col-12\">
      <div class=\"row g-2 align-items-center\">
        <div class=\"col-12 col-md-6\">
\t\t\t<div class=\"\">
\t\t\t  ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "scadenza", [], "any", false, false, false, 24), 'label', ["label" => "Scadenza"]);
        yield "
\t\t\t  ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "scadenza", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "scadenza", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "valid", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        // line 29
        yield "
\t\t\t  <div class=\"form-error\">
\t\t\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "scadenza", [], "any", false, false, false, 31), 'errors');
        yield "
\t\t\t  </div>
\t\t\t</div>
        </div>
        <div class=\"col-6 col-md-2\">
\t\t\t<div class=\"\">
\t\t\t  ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "quantita", [], "any", false, false, false, 37), 'label', ["label" => "Quantità"]);
        yield "
\t\t\t  ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "quantita", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "quantita", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "valid", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid"))), "min" => "0", "step" => "1", "inputmode" => "numeric", "pattern" => "\\d*"]]);
        // line 46
        yield "
\t\t\t  <div class=\"form-error\">
\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "quantita", [], "any", false, false, false, 48), 'errors');
        yield "
\t\t\t  </div>
\t\t\t</div>
        </div>
        <div class=\"col-6 col-md-4 d-none d-md-block\"></div>
      </div>
    </div>

    <div class=\"col-12\">
      <div class=\"row g-2\">
        <div class=\"col-12 col-md-5\">
          <label class=\"form-label\" for=\"categoriaSelect\">Categoria</label>

\t\t";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "categoria", [], "any", false, false, false, 61), 'widget', ["attr" => ["id" => "categoriaSelect", "class" => "form-select"]]);
        yield "
\t\t<div class=\"form-error\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "categoria", [], "any", false, false, false, 62), 'errors');
        yield "</div>

\t\t<div id=\"categoriaCustomWrap\" style=\"display:none;\">
\t\t  ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "categoria_custom", [], "any", false, false, false, 65), 'widget', ["attr" => ["id" => "categoriaCustom", "class" => "form-control mt-2"], "label" => false]);
        // line 68
        yield "
\t\t  <div class=\"form-error\">";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "categoria_custom", [], "any", false, false, false, 69), 'errors');
        yield "</div>
\t\t</div>

          <div class=\"form-text d-md-none\">Seleziona una categoria oppure scegli \"Altro\" per inserire una nuova categoria.</div>
        </div>

\t\t<div class=\"mb-3\">
\t\t  ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "tags_input", [], "any", false, false, false, 76), 'label', ["label" => "Tag"]);
        yield "
\t\t  ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "tags_input", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "es: senza glutine, bio, senza lattosio"]]);
        // line 79
        yield "
\t\t  <div class=\"form-text\">Separa i tag con una virgola.</div>
\t\t  <div class=\"form-error\">";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "tags_input", [], "any", false, false, false, 81), 'errors');
        yield "</div>
\t\t</div>

        <div class=\"col-12 col-md-7\">
          <label class=\"form-label d-md-block d-none\">Colore & Emoji</label>

          <div class=\"d-flex align-items-start gap-3\">
            <div class=\"d-flex flex-column align-items-center\">
              ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "colore", [], "any", false, false, false, 89), 'widget', ["attr" => ["id" => "colorHidden", "style" => "display:none"]]);
        yield "
              <button type=\"button\" id=\"colorPreviewBtn\" class=\"btn p-0\" aria-haspopup=\"true\"
                      style=\"width:52px;height:52px;border-radius:10px;border:1px solid #ddd;background:";
        // line 91
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "colore", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "colore", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91), "html", null, true)) : ("#ffffff"));
        yield ";\">
              </button>
\t\t\t  <div class=\"form-error\">";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "colore", [], "any", false, false, false, 93), 'errors');
        yield "</div>
              <div class=\"small mt-2\" id=\"colorName\" style=\"min-width:120px;text-align:center;\">
                ";
        // line 95
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "colore", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "colore", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95), "html", null, true)) : ("Bianco"));
        yield "
              </div>
            </div>

            <div class=\"d-flex flex-column align-items-center\">
              ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "emoji", [], "any", false, false, false, 100), 'widget', ["attr" => ["id" => "emojiHidden", "style" => "display:none"]]);
        yield "
              <button type=\"button\" id=\"emojiPreviewBtn\" class=\"btn btn-light\" style=\"width:52px;height:52px;border-radius:10px;border:1px solid #ddd;font-size:22px;\">
                ";
        // line 102
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "emoji", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "emoji", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "html", null, true)) : ("😀"));
        yield "
              </button>
\t\t\t  <div class=\"form-error\">";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "emoji", [], "any", false, false, false, 104), 'errors');
        yield "</div>
              <div class=\"small mt-2\" id=\"emojiLabel\">";
        // line 105
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "emoji", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "emoji", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105), "html", null, true)) : ("Nessuna"));
        yield "</div>
            </div>

            <div class=\"flex-grow-1 d-flex align-items-center d-none d-md-flex\">
              ";
        // line 110
        yield "              <div class=\"form-text\">&nbsp;</div>
            </div>
          </div>

          <div id=\"colorPalette\" class=\"card p-3 mt-3\" style=\"display:none; max-width:100%; overflow:auto;\">
            <div id=\"grayGrid\" style=\"display:grid; grid-template-columns:repeat(32,20px); gap:6px; margin-bottom:10px;\"></div>
            <div id=\"colorGrid\" style=\"display:grid; gap:6px; grid-template-columns:repeat(32,20px);\"></div>
            <div class=\"mt-2 d-flex justify-content-end\">
              <button type=\"button\" id=\"closePalette\" class=\"btn btn-sm btn-outline-primary\">Chiudi</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class=\"mt-4 d-flex gap-2\">
    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 128, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
    <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_index");
        yield "\" class=\"btn btn-outline-secondary\">Annulla</a>
  </div>

";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
        yield "

<style>
  .swatch, .gray-swatch { width:20px;height:20px;border-radius:4px;border:1px solid rgba(0,0,0,0.06);cursor:pointer;box-sizing:border-box; }
  .swatch.selected, .gray-swatch.selected { outline:2px solid rgba(0,0,0,0.12); box-shadow:0 0 0 3px rgba(255,255,255,0.4) inset; }
  @media (max-width:640px) {
    #colorGrid { grid-template-columns:repeat(16,20px) !important; }
    #grayGrid { grid-template-columns:repeat(16,20px) !important; }
  }

  input[type=number].form-control {
    max-width: 9rem;
  }
  
\t.form-error {
\t  color: #b64848;
\t  font-size: .9rem;
\t  margin-top: .25rem;
\t}
\t.is-invalid { border-color: #dc3545 !important; box-shadow: none !important; }
\t.invalid-feedback { display:block; color:#dc3545; font-size:.875rem; margin-top:.25rem; }

\t#colorPreviewBtn.is-invalid, #emojiPreviewBtn.is-invalid { outline: 2px solid rgba(220,53,69,0.16); }

</style>
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
        return "prodotto/_form.html.twig";
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
        return array (  250 => 132,  244 => 129,  240 => 128,  220 => 110,  213 => 105,  209 => 104,  204 => 102,  199 => 100,  191 => 95,  186 => 93,  181 => 91,  176 => 89,  165 => 81,  161 => 79,  159 => 77,  155 => 76,  145 => 69,  142 => 68,  140 => 65,  134 => 62,  130 => 61,  114 => 48,  110 => 46,  108 => 40,  107 => 38,  103 => 37,  94 => 31,  90 => 29,  88 => 27,  87 => 25,  83 => 24,  71 => 15,  67 => 13,  65 => 11,  64 => 8,  60 => 7,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate':'novalidate', 'class':'needs-validation'}}) }}
  {{ form_errors(form) }}

  <div class=\"row g-3\">
    <div class=\"col-12\">
\t\t<div class=\"mb-0\">
\t\t  {{ form_label(form.nome, 'Nome') }}
\t\t  {{ form_widget(form.nome, {
\t\t\t  'attr': {
\t\t\t\t'placeholder': 'Es: Latte, Farina, Uova',
\t\t\t\t'class': 'form-control' ~ (form.nome.vars.valid ? '' : ' is-invalid')
\t\t\t  }
\t\t  }) }}
\t\t  <div class=\"form-error\">
\t\t\t{{ form_errors(form.nome) }}
\t\t  </div>
\t\t</div>
    </div>

    <div class=\"col-12\">
      <div class=\"row g-2 align-items-center\">
        <div class=\"col-12 col-md-6\">
\t\t\t<div class=\"\">
\t\t\t  {{ form_label(form.scadenza, 'Scadenza') }}
\t\t\t  {{ form_widget(form.scadenza, {
\t\t\t\t  'attr': {
\t\t\t\t\t'class': 'form-control' ~ (form.scadenza.vars.valid ? '' : ' is-invalid')
\t\t\t\t  }
\t\t\t  }) }}
\t\t\t  <div class=\"form-error\">
\t\t\t\t{{ form_errors(form.scadenza) }}
\t\t\t  </div>
\t\t\t</div>
        </div>
        <div class=\"col-6 col-md-2\">
\t\t\t<div class=\"\">
\t\t\t  {{ form_label(form.quantita, 'Quantità') }}
\t\t\t  {{ form_widget(form.quantita, {
\t\t\t\t  'attr': {
\t\t\t\t\t'class': 'form-control' ~ (form.quantita.vars.valid ? '' : ' is-invalid'),
\t\t\t\t\t'min': '0',
\t\t\t\t\t'step': '1',
\t\t\t\t\t'inputmode': 'numeric',
\t\t\t\t\t'pattern': '\\\\d*'
\t\t\t\t  }
\t\t\t  }) }}
\t\t\t  <div class=\"form-error\">
\t\t\t\t{{ form_errors(form.quantita) }}
\t\t\t  </div>
\t\t\t</div>
        </div>
        <div class=\"col-6 col-md-4 d-none d-md-block\"></div>
      </div>
    </div>

    <div class=\"col-12\">
      <div class=\"row g-2\">
        <div class=\"col-12 col-md-5\">
          <label class=\"form-label\" for=\"categoriaSelect\">Categoria</label>

\t\t{{ form_widget(form.categoria, {'attr': {'id': 'categoriaSelect', 'class': 'form-select'}}) }}
\t\t<div class=\"form-error\">{{ form_errors(form.categoria) }}</div>

\t\t<div id=\"categoriaCustomWrap\" style=\"display:none;\">
\t\t  {{ form_widget(form.categoria_custom, {
\t\t\t'attr': {'id': 'categoriaCustom', 'class': 'form-control mt-2'},
\t\t\t'label': false
\t\t  }) }}
\t\t  <div class=\"form-error\">{{ form_errors(form.categoria_custom) }}</div>
\t\t</div>

          <div class=\"form-text d-md-none\">Seleziona una categoria oppure scegli \"Altro\" per inserire una nuova categoria.</div>
        </div>

\t\t<div class=\"mb-3\">
\t\t  {{ form_label(form.tags_input, 'Tag') }}
\t\t  {{ form_widget(form.tags_input, {
\t\t\t  'attr': { 'class': 'form-control', 'placeholder': 'es: senza glutine, bio, senza lattosio' }
\t\t  }) }}
\t\t  <div class=\"form-text\">Separa i tag con una virgola.</div>
\t\t  <div class=\"form-error\">{{ form_errors(form.tags_input) }}</div>
\t\t</div>

        <div class=\"col-12 col-md-7\">
          <label class=\"form-label d-md-block d-none\">Colore & Emoji</label>

          <div class=\"d-flex align-items-start gap-3\">
            <div class=\"d-flex flex-column align-items-center\">
              {{ form_widget(form.colore, {'attr': {'id':'colorHidden', 'style':'display:none'}}) }}
              <button type=\"button\" id=\"colorPreviewBtn\" class=\"btn p-0\" aria-haspopup=\"true\"
                      style=\"width:52px;height:52px;border-radius:10px;border:1px solid #ddd;background:{{ form.colore.vars.value ?: '#ffffff' }};\">
              </button>
\t\t\t  <div class=\"form-error\">{{ form_errors(form.colore) }}</div>
              <div class=\"small mt-2\" id=\"colorName\" style=\"min-width:120px;text-align:center;\">
                {{ form.colore.vars.value ?: 'Bianco' }}
              </div>
            </div>

            <div class=\"d-flex flex-column align-items-center\">
              {{ form_widget(form.emoji, {'attr': {'id':'emojiHidden', 'style':'display:none'}}) }}
              <button type=\"button\" id=\"emojiPreviewBtn\" class=\"btn btn-light\" style=\"width:52px;height:52px;border-radius:10px;border:1px solid #ddd;font-size:22px;\">
                {{ form.emoji.vars.value ?: '😀' }}
              </button>
\t\t\t  <div class=\"form-error\">{{ form_errors(form.emoji) }}</div>
              <div class=\"small mt-2\" id=\"emojiLabel\">{{ form.emoji.vars.value ?: 'Nessuna' }}</div>
            </div>

            <div class=\"flex-grow-1 d-flex align-items-center d-none d-md-flex\">
              {# area libera a destra su desktop: possibile testo di aiuto o leave blank #}
              <div class=\"form-text\">&nbsp;</div>
            </div>
          </div>

          <div id=\"colorPalette\" class=\"card p-3 mt-3\" style=\"display:none; max-width:100%; overflow:auto;\">
            <div id=\"grayGrid\" style=\"display:grid; grid-template-columns:repeat(32,20px); gap:6px; margin-bottom:10px;\"></div>
            <div id=\"colorGrid\" style=\"display:grid; gap:6px; grid-template-columns:repeat(32,20px);\"></div>
            <div class=\"mt-2 d-flex justify-content-end\">
              <button type=\"button\" id=\"closePalette\" class=\"btn btn-sm btn-outline-primary\">Chiudi</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class=\"mt-4 d-flex gap-2\">
    <button class=\"btn btn-primary\" type=\"submit\">{{ button_label|default('Save') }}</button>
    <a href=\"{{ path('app_prodotto_index') }}\" class=\"btn btn-outline-secondary\">Annulla</a>
  </div>

{{ form_end(form) }}

<style>
  .swatch, .gray-swatch { width:20px;height:20px;border-radius:4px;border:1px solid rgba(0,0,0,0.06);cursor:pointer;box-sizing:border-box; }
  .swatch.selected, .gray-swatch.selected { outline:2px solid rgba(0,0,0,0.12); box-shadow:0 0 0 3px rgba(255,255,255,0.4) inset; }
  @media (max-width:640px) {
    #colorGrid { grid-template-columns:repeat(16,20px) !important; }
    #grayGrid { grid-template-columns:repeat(16,20px) !important; }
  }

  input[type=number].form-control {
    max-width: 9rem;
  }
  
\t.form-error {
\t  color: #b64848;
\t  font-size: .9rem;
\t  margin-top: .25rem;
\t}
\t.is-invalid { border-color: #dc3545 !important; box-shadow: none !important; }
\t.invalid-feedback { display:block; color:#dc3545; font-size:.875rem; margin-top:.25rem; }

\t#colorPreviewBtn.is-invalid, #emojiPreviewBtn.is-invalid { outline: 2px solid rgba(220,53,69,0.16); }

</style>
", "prodotto/_form.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\prodotto\\_form.html.twig");
    }
}
