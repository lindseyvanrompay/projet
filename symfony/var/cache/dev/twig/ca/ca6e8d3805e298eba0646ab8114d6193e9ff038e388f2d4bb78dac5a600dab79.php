<?php

/* base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c1f89f14840507a843e3f1b0be1c5d377f700bc2a5ac190dad3dd3cef02d62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1f89f14840507a843e3f1b0be1c5d377f700bc2a5ac190dad3dd3cef02d62f->enter($__internal_1c1f89f14840507a843e3f1b0be1c5d377f700bc2a5ac190dad3dd3cef02d62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_52b094b611af3868dd6b545bd9db64e9fa5a1806631390b2fd3ffd814566b10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b094b611af3868dd6b545bd9db64e9fa5a1806631390b2fd3ffd814566b10f->enter($__internal_52b094b611af3868dd6b545bd9db64e9fa5a1806631390b2fd3ffd814566b10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <html lang=\"fr\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta charset=\"UTF-8\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        </body>
        </html>
";
        
        $__internal_1c1f89f14840507a843e3f1b0be1c5d377f700bc2a5ac190dad3dd3cef02d62f->leave($__internal_1c1f89f14840507a843e3f1b0be1c5d377f700bc2a5ac190dad3dd3cef02d62f_prof);

        
        $__internal_52b094b611af3868dd6b545bd9db64e9fa5a1806631390b2fd3ffd814566b10f->leave($__internal_52b094b611af3868dd6b545bd9db64e9fa5a1806631390b2fd3ffd814566b10f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2b67affb2415f13c8781887a7cf4e626ab733a9efd14182dd7d05aa5bf19f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b67affb2415f13c8781887a7cf4e626ab733a9efd14182dd7d05aa5bf19f6c->enter($__internal_d2b67affb2415f13c8781887a7cf4e626ab733a9efd14182dd7d05aa5bf19f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8eeaed95923486d80a96a0d5d6d6b5362075afccdf76cd05a1d6d4edd3bed128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eeaed95923486d80a96a0d5d6d6b5362075afccdf76cd05a1d6d4edd3bed128->enter($__internal_8eeaed95923486d80a96a0d5d6d6b5362075afccdf76cd05a1d6d4edd3bed128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8eeaed95923486d80a96a0d5d6d6b5362075afccdf76cd05a1d6d4edd3bed128->leave($__internal_8eeaed95923486d80a96a0d5d6d6b5362075afccdf76cd05a1d6d4edd3bed128_prof);

        
        $__internal_d2b67affb2415f13c8781887a7cf4e626ab733a9efd14182dd7d05aa5bf19f6c->leave($__internal_d2b67affb2415f13c8781887a7cf4e626ab733a9efd14182dd7d05aa5bf19f6c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d93e174def1c23a436414bf901227c20f437af4838978ac1da7cb0373b2a157a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93e174def1c23a436414bf901227c20f437af4838978ac1da7cb0373b2a157a->enter($__internal_d93e174def1c23a436414bf901227c20f437af4838978ac1da7cb0373b2a157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e6689ebf9b8f886aa15d86ad8cec3fd8c5da975c44e38590a5550464d3d9bab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6689ebf9b8f886aa15d86ad8cec3fd8c5da975c44e38590a5550464d3d9bab0->enter($__internal_e6689ebf9b8f886aa15d86ad8cec3fd8c5da975c44e38590a5550464d3d9bab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/projet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        
        $__internal_e6689ebf9b8f886aa15d86ad8cec3fd8c5da975c44e38590a5550464d3d9bab0->leave($__internal_e6689ebf9b8f886aa15d86ad8cec3fd8c5da975c44e38590a5550464d3d9bab0_prof);

        
        $__internal_d93e174def1c23a436414bf901227c20f437af4838978ac1da7cb0373b2a157a->leave($__internal_d93e174def1c23a436414bf901227c20f437af4838978ac1da7cb0373b2a157a_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_509d16e9b78899acd050934fa8b9cd4d0ed2721c441a7696195184d4447f6797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509d16e9b78899acd050934fa8b9cd4d0ed2721c441a7696195184d4447f6797->enter($__internal_509d16e9b78899acd050934fa8b9cd4d0ed2721c441a7696195184d4447f6797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3aa28d91881a507bf0e1531f4531639342677d7aac69630528168c800f82af62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa28d91881a507bf0e1531f4531639342677d7aac69630528168c800f82af62->enter($__internal_3aa28d91881a507bf0e1531f4531639342677d7aac69630528168c800f82af62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3aa28d91881a507bf0e1531f4531639342677d7aac69630528168c800f82af62->leave($__internal_3aa28d91881a507bf0e1531f4531639342677d7aac69630528168c800f82af62_prof);

        
        $__internal_509d16e9b78899acd050934fa8b9cd4d0ed2721c441a7696195184d4447f6797->leave($__internal_509d16e9b78899acd050934fa8b9cd4d0ed2721c441a7696195184d4447f6797_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa1e08e64af8d512df8cd453a86a029e01306e735106e223edb19d4ad510db66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1e08e64af8d512df8cd453a86a029e01306e735106e223edb19d4ad510db66->enter($__internal_fa1e08e64af8d512df8cd453a86a029e01306e735106e223edb19d4ad510db66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ead0f3a5c8f4cbe4adc763e9f6f8f9d4304141feaa27b433265f04db75462e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ead0f3a5c8f4cbe4adc763e9f6f8f9d4304141feaa27b433265f04db75462e7->enter($__internal_2ead0f3a5c8f4cbe4adc763e9f6f8f9d4304141feaa27b433265f04db75462e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ead0f3a5c8f4cbe4adc763e9f6f8f9d4304141feaa27b433265f04db75462e7->leave($__internal_2ead0f3a5c8f4cbe4adc763e9f6f8f9d4304141feaa27b433265f04db75462e7_prof);

        
        $__internal_fa1e08e64af8d512df8cd453a86a029e01306e735106e223edb19d4ad510db66->leave($__internal_fa1e08e64af8d512df8cd453a86a029e01306e735106e223edb19d4ad510db66_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 19,  115 => 18,  103 => 12,  98 => 11,  89 => 10,  71 => 8,  59 => 20,  56 => 19,  54 => 18,  48 => 15,  45 => 14,  43 => 10,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <html lang=\"fr\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>

    {% block stylesheets %}
      <link href=\"{{ asset('css/projet.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/bootstrap/bootstrap.min.css') }}\" rel=\"stylesheet\" />
  {% endblock %}

  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        </body>
        </html>
", "base.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/app/Resources/views/base.html.twig");
    }
}
