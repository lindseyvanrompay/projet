<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_64180bc5d592cec1aee10e0424950d82cbd57a14a4bdca8402996a233b7bbc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2f88fd7f1e0c652998fd090b7bfe1809d91db13a0c83a4e1eb83970534d1d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f88fd7f1e0c652998fd090b7bfe1809d91db13a0c83a4e1eb83970534d1d86->enter($__internal_e2f88fd7f1e0c652998fd090b7bfe1809d91db13a0c83a4e1eb83970534d1d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f2a51de56ffbef6c79a5327ade63cc1090dcefc9119d313061a59f0909ac3fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a51de56ffbef6c79a5327ade63cc1090dcefc9119d313061a59f0909ac3fe0->enter($__internal_f2a51de56ffbef6c79a5327ade63cc1090dcefc9119d313061a59f0909ac3fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f88fd7f1e0c652998fd090b7bfe1809d91db13a0c83a4e1eb83970534d1d86->leave($__internal_e2f88fd7f1e0c652998fd090b7bfe1809d91db13a0c83a4e1eb83970534d1d86_prof);

        
        $__internal_f2a51de56ffbef6c79a5327ade63cc1090dcefc9119d313061a59f0909ac3fe0->leave($__internal_f2a51de56ffbef6c79a5327ade63cc1090dcefc9119d313061a59f0909ac3fe0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f861f38b44ed5defd943f297fa9a54455581b5cd5fdd4e47ceab7391637cfcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f861f38b44ed5defd943f297fa9a54455581b5cd5fdd4e47ceab7391637cfcd->enter($__internal_4f861f38b44ed5defd943f297fa9a54455581b5cd5fdd4e47ceab7391637cfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6233d9d4ce92eafd9cddffc3b44a124542d860f6ea9b5e2715d63d20a61374f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6233d9d4ce92eafd9cddffc3b44a124542d860f6ea9b5e2715d63d20a61374f->enter($__internal_c6233d9d4ce92eafd9cddffc3b44a124542d860f6ea9b5e2715d63d20a61374f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c6233d9d4ce92eafd9cddffc3b44a124542d860f6ea9b5e2715d63d20a61374f->leave($__internal_c6233d9d4ce92eafd9cddffc3b44a124542d860f6ea9b5e2715d63d20a61374f_prof);

        
        $__internal_4f861f38b44ed5defd943f297fa9a54455581b5cd5fdd4e47ceab7391637cfcd->leave($__internal_4f861f38b44ed5defd943f297fa9a54455581b5cd5fdd4e47ceab7391637cfcd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_253a98dd9025c4157e8c96580d06e8a3aaab59ed67d1d795566e7889bec507e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253a98dd9025c4157e8c96580d06e8a3aaab59ed67d1d795566e7889bec507e5->enter($__internal_253a98dd9025c4157e8c96580d06e8a3aaab59ed67d1d795566e7889bec507e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6b28f963f85bd0fad3c517ea6f1055a417b2b1c7d77cd5efe48915a0f354f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b28f963f85bd0fad3c517ea6f1055a417b2b1c7d77cd5efe48915a0f354f11->enter($__internal_c6b28f963f85bd0fad3c517ea6f1055a417b2b1c7d77cd5efe48915a0f354f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6b28f963f85bd0fad3c517ea6f1055a417b2b1c7d77cd5efe48915a0f354f11->leave($__internal_c6b28f963f85bd0fad3c517ea6f1055a417b2b1c7d77cd5efe48915a0f354f11_prof);

        
        $__internal_253a98dd9025c4157e8c96580d06e8a3aaab59ed67d1d795566e7889bec507e5->leave($__internal_253a98dd9025c4157e8c96580d06e8a3aaab59ed67d1d795566e7889bec507e5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b58d30a256d2623ff1c4bfcdf09b7bd6384f56341585d14c9ac257d9dfb9c77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58d30a256d2623ff1c4bfcdf09b7bd6384f56341585d14c9ac257d9dfb9c77d->enter($__internal_b58d30a256d2623ff1c4bfcdf09b7bd6384f56341585d14c9ac257d9dfb9c77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44067c76bbe4fe237598df4a37423b94f85be3323c5354da3a761892f1584c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44067c76bbe4fe237598df4a37423b94f85be3323c5354da3a761892f1584c1b->enter($__internal_44067c76bbe4fe237598df4a37423b94f85be3323c5354da3a761892f1584c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_44067c76bbe4fe237598df4a37423b94f85be3323c5354da3a761892f1584c1b->leave($__internal_44067c76bbe4fe237598df4a37423b94f85be3323c5354da3a761892f1584c1b_prof);

        
        $__internal_b58d30a256d2623ff1c4bfcdf09b7bd6384f56341585d14c9ac257d9dfb9c77d->leave($__internal_b58d30a256d2623ff1c4bfcdf09b7bd6384f56341585d14c9ac257d9dfb9c77d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
