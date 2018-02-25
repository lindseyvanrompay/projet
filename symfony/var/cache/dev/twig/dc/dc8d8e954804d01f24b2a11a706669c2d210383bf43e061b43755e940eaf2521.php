<?php

/* @ProjetViews/FormViews/FormCreationRecette.html.twig */
class __TwigTemplate_5c81789dedba3682b47fc3b9de39521d5fc33df203778d2f2b1f73a9acdb71c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9226b135af6bae1c6e5c1cca5ea61418a82756448eb5f06fcb4ae95422ff9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9226b135af6bae1c6e5c1cca5ea61418a82756448eb5f06fcb4ae95422ff9ad->enter($__internal_e9226b135af6bae1c6e5c1cca5ea61418a82756448eb5f06fcb4ae95422ff9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetViews/FormViews/FormCreationRecette.html.twig"));

        $__internal_c6844601fdf83af4a1e3527ad87bf075d703b91b1664ae9da52a597803f9173b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6844601fdf83af4a1e3527ad87bf075d703b91b1664ae9da52a597803f9173b->enter($__internal_c6844601fdf83af4a1e3527ad87bf075d703b91b1664ae9da52a597803f9173b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetViews/FormViews/FormCreationRecette.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/projet.js"), "html", null, true);
        echo "\"></script>
<div class=\"container\">

  <div class=\"row\">

    <div class=\"col-md-4\"></div>
    <div class=\"col-md-4 col-md-offset-4\">

      ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_creation"] ?? $this->getContext($context, "form_creation")), 'form_start');
        echo "
      ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form_creation"] ?? $this->getContext($context, "form_creation")), 'errors');
        echo "
      ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_creation"] ?? $this->getContext($context, "form_creation")), "nomrecette", array()), 'row');
        echo "

      <div id=\"rows_aliment\">
      <div id=\"label_aliment\">
        <div class=\"row\">
          <div class=\"col\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_creation"] ?? $this->getContext($context, "form_creation")), "aliment", array()), 'label');
        echo "
          </div>
        </div>

        <div class=\"row\" id=\"row_aliment\">
          <div class=\"col-sm-8\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_creation"] ?? $this->getContext($context, "form_creation")), "aliment", array()), 'widget');
        echo "
          </div>

          <div class=\"col-sm-2\">
            <div class=\"input-group-prepend\">
              <div class=\"input-group-text\">
                <button type=\"button\" id=\"addButton\" class=\"btn btn-primary mb-2\">+</button>
              </div>
            </div>
          </div>

            <div class=\"col-sm-1\">
            <div class=\"input-group-prepend\">
              <div class=\"input-group-text\">
                <button type=\"button\" id=\"removeButton\" class=\"btn btn-primary mb-2\">-</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_creation"] ?? $this->getContext($context, "form_creation")), "submit", array()), 'row');
        echo "
      ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_creation"] ?? $this->getContext($context, "form_creation")), 'form_end');
        echo "
    </div>
  </div>

</div>
</div>

";
        
        $__internal_e9226b135af6bae1c6e5c1cca5ea61418a82756448eb5f06fcb4ae95422ff9ad->leave($__internal_e9226b135af6bae1c6e5c1cca5ea61418a82756448eb5f06fcb4ae95422ff9ad_prof);

        
        $__internal_c6844601fdf83af4a1e3527ad87bf075d703b91b1664ae9da52a597803f9173b->leave($__internal_c6844601fdf83af4a1e3527ad87bf075d703b91b1664ae9da52a597803f9173b_prof);

    }

    public function getTemplateName()
    {
        return "@ProjetViews/FormViews/FormCreationRecette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 48,  93 => 47,  67 => 24,  58 => 18,  49 => 12,  45 => 11,  41 => 10,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('js/projet.js') }}\"></script>
<div class=\"container\">

  <div class=\"row\">

    <div class=\"col-md-4\"></div>
    <div class=\"col-md-4 col-md-offset-4\">

      {{ form_start(form_creation) }}
      {{ form_errors(form_creation) }}
      {{ form_row(form_creation.nomrecette) }}

      <div id=\"rows_aliment\">
      <div id=\"label_aliment\">
        <div class=\"row\">
          <div class=\"col\">
            {{ form_label(form_creation.aliment) }}
          </div>
        </div>

        <div class=\"row\" id=\"row_aliment\">
          <div class=\"col-sm-8\">
            {{ form_widget(form_creation.aliment) }}
          </div>

          <div class=\"col-sm-2\">
            <div class=\"input-group-prepend\">
              <div class=\"input-group-text\">
                <button type=\"button\" id=\"addButton\" class=\"btn btn-primary mb-2\">+</button>
              </div>
            </div>
          </div>

            <div class=\"col-sm-1\">
            <div class=\"input-group-prepend\">
              <div class=\"input-group-text\">
                <button type=\"button\" id=\"removeButton\" class=\"btn btn-primary mb-2\">-</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


      {{ form_row(form_creation.submit) }}
      {{ form_end(form_creation) }}
    </div>
  </div>

</div>
</div>

", "@ProjetViews/FormViews/FormCreationRecette.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/src/ProjetBundle/Resources/views/FormViews/FormCreationRecette.html.twig");
    }
}
