<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_104ef15b9f0d5a75ec19fb4a9650beadfdc8be562252d0f7db0af903e69c9a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa64bf67c0aa9d9548170217492c563265114edb470bd2f2ac8fae1298dbd37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa64bf67c0aa9d9548170217492c563265114edb470bd2f2ac8fae1298dbd37c->enter($__internal_aa64bf67c0aa9d9548170217492c563265114edb470bd2f2ac8fae1298dbd37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_50330d3c354a4f3df4b284055358512a980774b33d04aa869366a3f452c32822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50330d3c354a4f3df4b284055358512a980774b33d04aa869366a3f452c32822->enter($__internal_50330d3c354a4f3df4b284055358512a980774b33d04aa869366a3f452c32822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_aa64bf67c0aa9d9548170217492c563265114edb470bd2f2ac8fae1298dbd37c->leave($__internal_aa64bf67c0aa9d9548170217492c563265114edb470bd2f2ac8fae1298dbd37c_prof);

        
        $__internal_50330d3c354a4f3df4b284055358512a980774b33d04aa869366a3f452c32822->leave($__internal_50330d3c354a4f3df4b284055358512a980774b33d04aa869366a3f452c32822_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_45993a0b80e79bf7a50f72cd60458c93de01eb2194f84176ecbf7b4b8ebefe48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45993a0b80e79bf7a50f72cd60458c93de01eb2194f84176ecbf7b4b8ebefe48->enter($__internal_45993a0b80e79bf7a50f72cd60458c93de01eb2194f84176ecbf7b4b8ebefe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a96db9a4aac58c878604c6955a4a4e470d2fba2d54c2269042fd2a1483ee9614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96db9a4aac58c878604c6955a4a4e470d2fba2d54c2269042fd2a1483ee9614->enter($__internal_a96db9a4aac58c878604c6955a4a4e470d2fba2d54c2269042fd2a1483ee9614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a96db9a4aac58c878604c6955a4a4e470d2fba2d54c2269042fd2a1483ee9614->leave($__internal_a96db9a4aac58c878604c6955a4a4e470d2fba2d54c2269042fd2a1483ee9614_prof);

        
        $__internal_45993a0b80e79bf7a50f72cd60458c93de01eb2194f84176ecbf7b4b8ebefe48->leave($__internal_45993a0b80e79bf7a50f72cd60458c93de01eb2194f84176ecbf7b4b8ebefe48_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_752945299ca3b8a19fa1d68cc6f9509cde0fdca7181dfdab87ebe08efcdbbb0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752945299ca3b8a19fa1d68cc6f9509cde0fdca7181dfdab87ebe08efcdbbb0f->enter($__internal_752945299ca3b8a19fa1d68cc6f9509cde0fdca7181dfdab87ebe08efcdbbb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_159c66d039529b28495a64a7c4b0ad0b57373dc97e6161520e6dcfaaf4c1dd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159c66d039529b28495a64a7c4b0ad0b57373dc97e6161520e6dcfaaf4c1dd22->enter($__internal_159c66d039529b28495a64a7c4b0ad0b57373dc97e6161520e6dcfaaf4c1dd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_159c66d039529b28495a64a7c4b0ad0b57373dc97e6161520e6dcfaaf4c1dd22->leave($__internal_159c66d039529b28495a64a7c4b0ad0b57373dc97e6161520e6dcfaaf4c1dd22_prof);

        
        $__internal_752945299ca3b8a19fa1d68cc6f9509cde0fdca7181dfdab87ebe08efcdbbb0f->leave($__internal_752945299ca3b8a19fa1d68cc6f9509cde0fdca7181dfdab87ebe08efcdbbb0f_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a69035274d254da40e10fb72371821510db82cb29aca938b73fb9599634a9597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69035274d254da40e10fb72371821510db82cb29aca938b73fb9599634a9597->enter($__internal_a69035274d254da40e10fb72371821510db82cb29aca938b73fb9599634a9597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_439f119ae8ad4356116f9eb65624fbe6f7ab70c804e960a1f0bd1788c0b895a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439f119ae8ad4356116f9eb65624fbe6f7ab70c804e960a1f0bd1788c0b895a1->enter($__internal_439f119ae8ad4356116f9eb65624fbe6f7ab70c804e960a1f0bd1788c0b895a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_439f119ae8ad4356116f9eb65624fbe6f7ab70c804e960a1f0bd1788c0b895a1->leave($__internal_439f119ae8ad4356116f9eb65624fbe6f7ab70c804e960a1f0bd1788c0b895a1_prof);

        
        $__internal_a69035274d254da40e10fb72371821510db82cb29aca938b73fb9599634a9597->leave($__internal_a69035274d254da40e10fb72371821510db82cb29aca938b73fb9599634a9597_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e649ba4951b63dbd5ab9cbcdde75638a2c9287a11c3826bc9366d15dde3741ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e649ba4951b63dbd5ab9cbcdde75638a2c9287a11c3826bc9366d15dde3741ee->enter($__internal_e649ba4951b63dbd5ab9cbcdde75638a2c9287a11c3826bc9366d15dde3741ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_5d399ac07377d1323bec58a5730829d111208614217e7bd4ffdfe57768f8f319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d399ac07377d1323bec58a5730829d111208614217e7bd4ffdfe57768f8f319->enter($__internal_5d399ac07377d1323bec58a5730829d111208614217e7bd4ffdfe57768f8f319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_fefd39385674527f1c4f9e252f0454534b0a41128a2da754c5f633ab63a4ec1a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1f8515cf556fac0f0945148a4760669f6cb8ab3ab9a7ec9e9dbc0177ba64033d = "{{") && ('' === $__internal_1f8515cf556fac0f0945148a4760669f6cb8ab3ab9a7ec9e9dbc0177ba64033d || 0 === strpos($__internal_fefd39385674527f1c4f9e252f0454534b0a41128a2da754c5f633ab63a4ec1a, $__internal_1f8515cf556fac0f0945148a4760669f6cb8ab3ab9a7ec9e9dbc0177ba64033d)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_5d399ac07377d1323bec58a5730829d111208614217e7bd4ffdfe57768f8f319->leave($__internal_5d399ac07377d1323bec58a5730829d111208614217e7bd4ffdfe57768f8f319_prof);

        
        $__internal_e649ba4951b63dbd5ab9cbcdde75638a2c9287a11c3826bc9366d15dde3741ee->leave($__internal_e649ba4951b63dbd5ab9cbcdde75638a2c9287a11c3826bc9366d15dde3741ee_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6be3d92659542be7b66ed6577b5c0d97e83bfea83e00fd893af9484288db45fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be3d92659542be7b66ed6577b5c0d97e83bfea83e00fd893af9484288db45fb->enter($__internal_6be3d92659542be7b66ed6577b5c0d97e83bfea83e00fd893af9484288db45fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_87fcc6a8807c1a8344de21ae3e69de20df09db19c784d145869276270a8d661e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fcc6a8807c1a8344de21ae3e69de20df09db19c784d145869276270a8d661e->enter($__internal_87fcc6a8807c1a8344de21ae3e69de20df09db19c784d145869276270a8d661e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_87fcc6a8807c1a8344de21ae3e69de20df09db19c784d145869276270a8d661e->leave($__internal_87fcc6a8807c1a8344de21ae3e69de20df09db19c784d145869276270a8d661e_prof);

        
        $__internal_6be3d92659542be7b66ed6577b5c0d97e83bfea83e00fd893af9484288db45fb->leave($__internal_6be3d92659542be7b66ed6577b5c0d97e83bfea83e00fd893af9484288db45fb_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_77a18c61ef7cee27cbd210a2b1364d0b876b2b5b19da5e6bb509f02a222edff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a18c61ef7cee27cbd210a2b1364d0b876b2b5b19da5e6bb509f02a222edff4->enter($__internal_77a18c61ef7cee27cbd210a2b1364d0b876b2b5b19da5e6bb509f02a222edff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_40cc0248be647abe66bdfbbb76e142628e4503f9cbec21dd41724c10b9f59117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cc0248be647abe66bdfbbb76e142628e4503f9cbec21dd41724c10b9f59117->enter($__internal_40cc0248be647abe66bdfbbb76e142628e4503f9cbec21dd41724c10b9f59117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_40cc0248be647abe66bdfbbb76e142628e4503f9cbec21dd41724c10b9f59117->leave($__internal_40cc0248be647abe66bdfbbb76e142628e4503f9cbec21dd41724c10b9f59117_prof);

        
        $__internal_77a18c61ef7cee27cbd210a2b1364d0b876b2b5b19da5e6bb509f02a222edff4->leave($__internal_77a18c61ef7cee27cbd210a2b1364d0b876b2b5b19da5e6bb509f02a222edff4_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ceba2dd4bd52541db28b1990fb52f875e176f45bdfc2f59012d4ec95a51be90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceba2dd4bd52541db28b1990fb52f875e176f45bdfc2f59012d4ec95a51be90a->enter($__internal_ceba2dd4bd52541db28b1990fb52f875e176f45bdfc2f59012d4ec95a51be90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_12986732964c6dc42b462729f7164b72cb9efde7b860dd2f61ce87bb38185efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12986732964c6dc42b462729f7164b72cb9efde7b860dd2f61ce87bb38185efa->enter($__internal_12986732964c6dc42b462729f7164b72cb9efde7b860dd2f61ce87bb38185efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_12986732964c6dc42b462729f7164b72cb9efde7b860dd2f61ce87bb38185efa->leave($__internal_12986732964c6dc42b462729f7164b72cb9efde7b860dd2f61ce87bb38185efa_prof);

        
        $__internal_ceba2dd4bd52541db28b1990fb52f875e176f45bdfc2f59012d4ec95a51be90a->leave($__internal_ceba2dd4bd52541db28b1990fb52f875e176f45bdfc2f59012d4ec95a51be90a_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2403e4e8bb841fcca7c65061102daaeeb9c60a74a9d25004719d19b003a2104c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2403e4e8bb841fcca7c65061102daaeeb9c60a74a9d25004719d19b003a2104c->enter($__internal_2403e4e8bb841fcca7c65061102daaeeb9c60a74a9d25004719d19b003a2104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_613cae9cbb68bf76f17444ec4ef7b908f3bafe82e908078c68c80e89387a2d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613cae9cbb68bf76f17444ec4ef7b908f3bafe82e908078c68c80e89387a2d60->enter($__internal_613cae9cbb68bf76f17444ec4ef7b908f3bafe82e908078c68c80e89387a2d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_613cae9cbb68bf76f17444ec4ef7b908f3bafe82e908078c68c80e89387a2d60->leave($__internal_613cae9cbb68bf76f17444ec4ef7b908f3bafe82e908078c68c80e89387a2d60_prof);

        
        $__internal_2403e4e8bb841fcca7c65061102daaeeb9c60a74a9d25004719d19b003a2104c->leave($__internal_2403e4e8bb841fcca7c65061102daaeeb9c60a74a9d25004719d19b003a2104c_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c7f878b1ed8ed3b7882f023d9c998abcce16e366da2f2fe6145ad6e37b8378ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f878b1ed8ed3b7882f023d9c998abcce16e366da2f2fe6145ad6e37b8378ef->enter($__internal_c7f878b1ed8ed3b7882f023d9c998abcce16e366da2f2fe6145ad6e37b8378ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8aa6071c6f76744b904de3870347308ad8bc7cd0477e40e22d4ef512e3ef83a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa6071c6f76744b904de3870347308ad8bc7cd0477e40e22d4ef512e3ef83a4->enter($__internal_8aa6071c6f76744b904de3870347308ad8bc7cd0477e40e22d4ef512e3ef83a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_8aa6071c6f76744b904de3870347308ad8bc7cd0477e40e22d4ef512e3ef83a4->leave($__internal_8aa6071c6f76744b904de3870347308ad8bc7cd0477e40e22d4ef512e3ef83a4_prof);

        
        $__internal_c7f878b1ed8ed3b7882f023d9c998abcce16e366da2f2fe6145ad6e37b8378ef->leave($__internal_c7f878b1ed8ed3b7882f023d9c998abcce16e366da2f2fe6145ad6e37b8378ef_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_707383690895a458108fe4f00e2e485447d2d018af6127fa060a387bef637d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707383690895a458108fe4f00e2e485447d2d018af6127fa060a387bef637d58->enter($__internal_707383690895a458108fe4f00e2e485447d2d018af6127fa060a387bef637d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_98198fe8ba60a18474340e539b88522e880e3172932b68151c965cd50525bae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98198fe8ba60a18474340e539b88522e880e3172932b68151c965cd50525bae4->enter($__internal_98198fe8ba60a18474340e539b88522e880e3172932b68151c965cd50525bae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_98198fe8ba60a18474340e539b88522e880e3172932b68151c965cd50525bae4->leave($__internal_98198fe8ba60a18474340e539b88522e880e3172932b68151c965cd50525bae4_prof);

        
        $__internal_707383690895a458108fe4f00e2e485447d2d018af6127fa060a387bef637d58->leave($__internal_707383690895a458108fe4f00e2e485447d2d018af6127fa060a387bef637d58_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_17d4c6f360e071276a720ed994d0f6c189702de1c953a67aa542ebc2de29e423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d4c6f360e071276a720ed994d0f6c189702de1c953a67aa542ebc2de29e423->enter($__internal_17d4c6f360e071276a720ed994d0f6c189702de1c953a67aa542ebc2de29e423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_dce095bb7995fcabdd49958a76199c71ce937e807725a2d9813d94d331bad295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce095bb7995fcabdd49958a76199c71ce937e807725a2d9813d94d331bad295->enter($__internal_dce095bb7995fcabdd49958a76199c71ce937e807725a2d9813d94d331bad295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_dce095bb7995fcabdd49958a76199c71ce937e807725a2d9813d94d331bad295->leave($__internal_dce095bb7995fcabdd49958a76199c71ce937e807725a2d9813d94d331bad295_prof);

        
        $__internal_17d4c6f360e071276a720ed994d0f6c189702de1c953a67aa542ebc2de29e423->leave($__internal_17d4c6f360e071276a720ed994d0f6c189702de1c953a67aa542ebc2de29e423_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_45e61a9f9317bc4ea3a6ea4f6a885dc24779f4314d4b534226328f679675e092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e61a9f9317bc4ea3a6ea4f6a885dc24779f4314d4b534226328f679675e092->enter($__internal_45e61a9f9317bc4ea3a6ea4f6a885dc24779f4314d4b534226328f679675e092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f2115d27d068ed29cafb2bc4a6047b893d7bc07297a4991c827ac60f92ccc0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2115d27d068ed29cafb2bc4a6047b893d7bc07297a4991c827ac60f92ccc0fd->enter($__internal_f2115d27d068ed29cafb2bc4a6047b893d7bc07297a4991c827ac60f92ccc0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_f2115d27d068ed29cafb2bc4a6047b893d7bc07297a4991c827ac60f92ccc0fd->leave($__internal_f2115d27d068ed29cafb2bc4a6047b893d7bc07297a4991c827ac60f92ccc0fd_prof);

        
        $__internal_45e61a9f9317bc4ea3a6ea4f6a885dc24779f4314d4b534226328f679675e092->leave($__internal_45e61a9f9317bc4ea3a6ea4f6a885dc24779f4314d4b534226328f679675e092_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5901e189a732ae676423421c9949039154c2473c36f7284f20b24ba4518188c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5901e189a732ae676423421c9949039154c2473c36f7284f20b24ba4518188c4->enter($__internal_5901e189a732ae676423421c9949039154c2473c36f7284f20b24ba4518188c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a195bca6d7c3c83bb06927909c7f1996f855de55a214c4fcdd91307e29e91aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a195bca6d7c3c83bb06927909c7f1996f855de55a214c4fcdd91307e29e91aad->enter($__internal_a195bca6d7c3c83bb06927909c7f1996f855de55a214c4fcdd91307e29e91aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_a195bca6d7c3c83bb06927909c7f1996f855de55a214c4fcdd91307e29e91aad->leave($__internal_a195bca6d7c3c83bb06927909c7f1996f855de55a214c4fcdd91307e29e91aad_prof);

        
        $__internal_5901e189a732ae676423421c9949039154c2473c36f7284f20b24ba4518188c4->leave($__internal_5901e189a732ae676423421c9949039154c2473c36f7284f20b24ba4518188c4_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5559c2db99db3bcbfe0ddc495ae1afe1ce8589f17c76a56eb9bf96832c37d033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5559c2db99db3bcbfe0ddc495ae1afe1ce8589f17c76a56eb9bf96832c37d033->enter($__internal_5559c2db99db3bcbfe0ddc495ae1afe1ce8589f17c76a56eb9bf96832c37d033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6bd3e5d0ad296db3e33042c11329e2494f2e9366528c7ce9801e260574cfc47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd3e5d0ad296db3e33042c11329e2494f2e9366528c7ce9801e260574cfc47e->enter($__internal_6bd3e5d0ad296db3e33042c11329e2494f2e9366528c7ce9801e260574cfc47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_6bd3e5d0ad296db3e33042c11329e2494f2e9366528c7ce9801e260574cfc47e->leave($__internal_6bd3e5d0ad296db3e33042c11329e2494f2e9366528c7ce9801e260574cfc47e_prof);

        
        $__internal_5559c2db99db3bcbfe0ddc495ae1afe1ce8589f17c76a56eb9bf96832c37d033->leave($__internal_5559c2db99db3bcbfe0ddc495ae1afe1ce8589f17c76a56eb9bf96832c37d033_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2ce93b62305792b21057baacbee74f51f8e81c55e45d600fa04c54d7d06a5bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce93b62305792b21057baacbee74f51f8e81c55e45d600fa04c54d7d06a5bae->enter($__internal_2ce93b62305792b21057baacbee74f51f8e81c55e45d600fa04c54d7d06a5bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_89ba26c8d9797eaf1b6b42576b54bf2620e5cba860f5058981d1eec115f542fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ba26c8d9797eaf1b6b42576b54bf2620e5cba860f5058981d1eec115f542fe->enter($__internal_89ba26c8d9797eaf1b6b42576b54bf2620e5cba860f5058981d1eec115f542fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_89ba26c8d9797eaf1b6b42576b54bf2620e5cba860f5058981d1eec115f542fe->leave($__internal_89ba26c8d9797eaf1b6b42576b54bf2620e5cba860f5058981d1eec115f542fe_prof);

        
        $__internal_2ce93b62305792b21057baacbee74f51f8e81c55e45d600fa04c54d7d06a5bae->leave($__internal_2ce93b62305792b21057baacbee74f51f8e81c55e45d600fa04c54d7d06a5bae_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_cd844cb94234f879981826e4042175fdca02ba4cd6e0487c510a01e66c499e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd844cb94234f879981826e4042175fdca02ba4cd6e0487c510a01e66c499e77->enter($__internal_cd844cb94234f879981826e4042175fdca02ba4cd6e0487c510a01e66c499e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ae329c23ddd01875028700d8e9340c8bef81bb8663c5f2f42731a915c4feb4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae329c23ddd01875028700d8e9340c8bef81bb8663c5f2f42731a915c4feb4f7->enter($__internal_ae329c23ddd01875028700d8e9340c8bef81bb8663c5f2f42731a915c4feb4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ae329c23ddd01875028700d8e9340c8bef81bb8663c5f2f42731a915c4feb4f7->leave($__internal_ae329c23ddd01875028700d8e9340c8bef81bb8663c5f2f42731a915c4feb4f7_prof);

        
        $__internal_cd844cb94234f879981826e4042175fdca02ba4cd6e0487c510a01e66c499e77->leave($__internal_cd844cb94234f879981826e4042175fdca02ba4cd6e0487c510a01e66c499e77_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_2b8985fe3a83cae85c814d65ba312eee816fc5961c271ed49c5539b79cf91bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8985fe3a83cae85c814d65ba312eee816fc5961c271ed49c5539b79cf91bc5->enter($__internal_2b8985fe3a83cae85c814d65ba312eee816fc5961c271ed49c5539b79cf91bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_9a996f54e32f65a280536b8ff77868c95789b617168d83d55fa00a7cde482bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a996f54e32f65a280536b8ff77868c95789b617168d83d55fa00a7cde482bbf->enter($__internal_9a996f54e32f65a280536b8ff77868c95789b617168d83d55fa00a7cde482bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9a996f54e32f65a280536b8ff77868c95789b617168d83d55fa00a7cde482bbf->leave($__internal_9a996f54e32f65a280536b8ff77868c95789b617168d83d55fa00a7cde482bbf_prof);

        
        $__internal_2b8985fe3a83cae85c814d65ba312eee816fc5961c271ed49c5539b79cf91bc5->leave($__internal_2b8985fe3a83cae85c814d65ba312eee816fc5961c271ed49c5539b79cf91bc5_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1846a516fa2ada9c9249a86e8c63d2fd7d525758d33e64561d3a447722adfdce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1846a516fa2ada9c9249a86e8c63d2fd7d525758d33e64561d3a447722adfdce->enter($__internal_1846a516fa2ada9c9249a86e8c63d2fd7d525758d33e64561d3a447722adfdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e215434cc9983a0eab3285ad2a014f799c769c49f23a5a65b3539c733fec7e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e215434cc9983a0eab3285ad2a014f799c769c49f23a5a65b3539c733fec7e33->enter($__internal_e215434cc9983a0eab3285ad2a014f799c769c49f23a5a65b3539c733fec7e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 190
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 197
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_e215434cc9983a0eab3285ad2a014f799c769c49f23a5a65b3539c733fec7e33->leave($__internal_e215434cc9983a0eab3285ad2a014f799c769c49f23a5a65b3539c733fec7e33_prof);

        
        $__internal_1846a516fa2ada9c9249a86e8c63d2fd7d525758d33e64561d3a447722adfdce->leave($__internal_1846a516fa2ada9c9249a86e8c63d2fd7d525758d33e64561d3a447722adfdce_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_288c3526fb8a10557e17010eddb5840a6cc6925e017a56663f65a1b76abaab2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288c3526fb8a10557e17010eddb5840a6cc6925e017a56663f65a1b76abaab2f->enter($__internal_288c3526fb8a10557e17010eddb5840a6cc6925e017a56663f65a1b76abaab2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5035344cede83183dd607359050cff25e033435bde5e2eda50b2a89e55f1d8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5035344cede83183dd607359050cff25e033435bde5e2eda50b2a89e55f1d8c3->enter($__internal_5035344cede83183dd607359050cff25e033435bde5e2eda50b2a89e55f1d8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_5035344cede83183dd607359050cff25e033435bde5e2eda50b2a89e55f1d8c3->leave($__internal_5035344cede83183dd607359050cff25e033435bde5e2eda50b2a89e55f1d8c3_prof);

        
        $__internal_288c3526fb8a10557e17010eddb5840a6cc6925e017a56663f65a1b76abaab2f->leave($__internal_288c3526fb8a10557e17010eddb5840a6cc6925e017a56663f65a1b76abaab2f_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f762c3be9146e253f31877f81efffbd0b2f8bc3c4f3d7af665f76124e29a0a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f762c3be9146e253f31877f81efffbd0b2f8bc3c4f3d7af665f76124e29a0a1b->enter($__internal_f762c3be9146e253f31877f81efffbd0b2f8bc3c4f3d7af665f76124e29a0a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_eb17c86717eb828836d7ea3918c8009c60809c8aec74e26f6d0b0f7265463253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb17c86717eb828836d7ea3918c8009c60809c8aec74e26f6d0b0f7265463253->enter($__internal_eb17c86717eb828836d7ea3918c8009c60809c8aec74e26f6d0b0f7265463253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_eb17c86717eb828836d7ea3918c8009c60809c8aec74e26f6d0b0f7265463253->leave($__internal_eb17c86717eb828836d7ea3918c8009c60809c8aec74e26f6d0b0f7265463253_prof);

        
        $__internal_f762c3be9146e253f31877f81efffbd0b2f8bc3c4f3d7af665f76124e29a0a1b->leave($__internal_f762c3be9146e253f31877f81efffbd0b2f8bc3c4f3d7af665f76124e29a0a1b_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_91f7fd46c34e5b7c93f04f8c268d4efa5a784a937eebf4490dedcba992c8291c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f7fd46c34e5b7c93f04f8c268d4efa5a784a937eebf4490dedcba992c8291c->enter($__internal_91f7fd46c34e5b7c93f04f8c268d4efa5a784a937eebf4490dedcba992c8291c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_feaa9ee25d2fcb320e9eff4ae4be1ef9d23ed731bc41da53476a5069c0182d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feaa9ee25d2fcb320e9eff4ae4be1ef9d23ed731bc41da53476a5069c0182d19->enter($__internal_feaa9ee25d2fcb320e9eff4ae4be1ef9d23ed731bc41da53476a5069c0182d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_feaa9ee25d2fcb320e9eff4ae4be1ef9d23ed731bc41da53476a5069c0182d19->leave($__internal_feaa9ee25d2fcb320e9eff4ae4be1ef9d23ed731bc41da53476a5069c0182d19_prof);

        
        $__internal_91f7fd46c34e5b7c93f04f8c268d4efa5a784a937eebf4490dedcba992c8291c->leave($__internal_91f7fd46c34e5b7c93f04f8c268d4efa5a784a937eebf4490dedcba992c8291c_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e0e5797ad5bcf56bd40631ebbab8a1200fe1235bea369ef61d865a5f6ab75692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e5797ad5bcf56bd40631ebbab8a1200fe1235bea369ef61d865a5f6ab75692->enter($__internal_e0e5797ad5bcf56bd40631ebbab8a1200fe1235bea369ef61d865a5f6ab75692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_eec74c7c6b144cad087069449518cfdca8c606ab070d9b58802dacc5845b0c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec74c7c6b144cad087069449518cfdca8c606ab070d9b58802dacc5845b0c6a->enter($__internal_eec74c7c6b144cad087069449518cfdca8c606ab070d9b58802dacc5845b0c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_eec74c7c6b144cad087069449518cfdca8c606ab070d9b58802dacc5845b0c6a->leave($__internal_eec74c7c6b144cad087069449518cfdca8c606ab070d9b58802dacc5845b0c6a_prof);

        
        $__internal_e0e5797ad5bcf56bd40631ebbab8a1200fe1235bea369ef61d865a5f6ab75692->leave($__internal_e0e5797ad5bcf56bd40631ebbab8a1200fe1235bea369ef61d865a5f6ab75692_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1f76d369b69c023d639bb6a3e88d920284d76a3080b3f863d8a68fcceb880838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f76d369b69c023d639bb6a3e88d920284d76a3080b3f863d8a68fcceb880838->enter($__internal_1f76d369b69c023d639bb6a3e88d920284d76a3080b3f863d8a68fcceb880838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_54e5682efcdf8935843ea84a884147f5b32d66911c3590c3566bc70efb3eee63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e5682efcdf8935843ea84a884147f5b32d66911c3590c3566bc70efb3eee63->enter($__internal_54e5682efcdf8935843ea84a884147f5b32d66911c3590c3566bc70efb3eee63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_54e5682efcdf8935843ea84a884147f5b32d66911c3590c3566bc70efb3eee63->leave($__internal_54e5682efcdf8935843ea84a884147f5b32d66911c3590c3566bc70efb3eee63_prof);

        
        $__internal_1f76d369b69c023d639bb6a3e88d920284d76a3080b3f863d8a68fcceb880838->leave($__internal_1f76d369b69c023d639bb6a3e88d920284d76a3080b3f863d8a68fcceb880838_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9c2951df5f4aa22af958dc32f743f3b32295b6543cbacd3f2764de36924dfc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2951df5f4aa22af958dc32f743f3b32295b6543cbacd3f2764de36924dfc1e->enter($__internal_9c2951df5f4aa22af958dc32f743f3b32295b6543cbacd3f2764de36924dfc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_086375f51708320c6595ed69f9ff41599ffbafa7040286d2f2351241ed3fc1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086375f51708320c6595ed69f9ff41599ffbafa7040286d2f2351241ed3fc1fd->enter($__internal_086375f51708320c6595ed69f9ff41599ffbafa7040286d2f2351241ed3fc1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_086375f51708320c6595ed69f9ff41599ffbafa7040286d2f2351241ed3fc1fd->leave($__internal_086375f51708320c6595ed69f9ff41599ffbafa7040286d2f2351241ed3fc1fd_prof);

        
        $__internal_9c2951df5f4aa22af958dc32f743f3b32295b6543cbacd3f2764de36924dfc1e->leave($__internal_9c2951df5f4aa22af958dc32f743f3b32295b6543cbacd3f2764de36924dfc1e_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3b518b577ceeb73e9afef407851ce0ce563dc914cec5ba584b02e6d71302c39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b518b577ceeb73e9afef407851ce0ce563dc914cec5ba584b02e6d71302c39f->enter($__internal_3b518b577ceeb73e9afef407851ce0ce563dc914cec5ba584b02e6d71302c39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_82e87ddc2c824bb8df572c894c3ba91fdb5929f3e20390ccf258a176ee0b084c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e87ddc2c824bb8df572c894c3ba91fdb5929f3e20390ccf258a176ee0b084c->enter($__internal_82e87ddc2c824bb8df572c894c3ba91fdb5929f3e20390ccf258a176ee0b084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_82e87ddc2c824bb8df572c894c3ba91fdb5929f3e20390ccf258a176ee0b084c->leave($__internal_82e87ddc2c824bb8df572c894c3ba91fdb5929f3e20390ccf258a176ee0b084c_prof);

        
        $__internal_3b518b577ceeb73e9afef407851ce0ce563dc914cec5ba584b02e6d71302c39f->leave($__internal_3b518b577ceeb73e9afef407851ce0ce563dc914cec5ba584b02e6d71302c39f_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ec51f5deca5686b9088d8c617743a7dc1398fecb859d54763a23db37a75bb5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec51f5deca5686b9088d8c617743a7dc1398fecb859d54763a23db37a75bb5e2->enter($__internal_ec51f5deca5686b9088d8c617743a7dc1398fecb859d54763a23db37a75bb5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fd7f0adbb28ae874794206b93ab056a42b52e4926a94a775a572d73e061e79ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7f0adbb28ae874794206b93ab056a42b52e4926a94a775a572d73e061e79ba->enter($__internal_fd7f0adbb28ae874794206b93ab056a42b52e4926a94a775a572d73e061e79ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_fd7f0adbb28ae874794206b93ab056a42b52e4926a94a775a572d73e061e79ba->leave($__internal_fd7f0adbb28ae874794206b93ab056a42b52e4926a94a775a572d73e061e79ba_prof);

        
        $__internal_ec51f5deca5686b9088d8c617743a7dc1398fecb859d54763a23db37a75bb5e2->leave($__internal_ec51f5deca5686b9088d8c617743a7dc1398fecb859d54763a23db37a75bb5e2_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5cc73ebb2b7488373b130ae2f914fa4710b70c6543fe8c6a38d0e27baf7f12f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc73ebb2b7488373b130ae2f914fa4710b70c6543fe8c6a38d0e27baf7f12f6->enter($__internal_5cc73ebb2b7488373b130ae2f914fa4710b70c6543fe8c6a38d0e27baf7f12f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_65ef31f5c25230332891bbe4670fbbf35d72198adeba3dd6935c84a54d1681a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ef31f5c25230332891bbe4670fbbf35d72198adeba3dd6935c84a54d1681a8->enter($__internal_65ef31f5c25230332891bbe4670fbbf35d72198adeba3dd6935c84a54d1681a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_65ef31f5c25230332891bbe4670fbbf35d72198adeba3dd6935c84a54d1681a8->leave($__internal_65ef31f5c25230332891bbe4670fbbf35d72198adeba3dd6935c84a54d1681a8_prof);

        
        $__internal_5cc73ebb2b7488373b130ae2f914fa4710b70c6543fe8c6a38d0e27baf7f12f6->leave($__internal_5cc73ebb2b7488373b130ae2f914fa4710b70c6543fe8c6a38d0e27baf7f12f6_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
