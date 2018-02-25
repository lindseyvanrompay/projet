<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4f41b962ded3b8ff3b4ffa6789a7462f89a533e29dfb6b1b57d1b844045253bd extends Twig_Template
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
        $__internal_ad94caf507e7e919908e77289c2da33fa8078ae9d2156a77ff179b5b73fc2938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad94caf507e7e919908e77289c2da33fa8078ae9d2156a77ff179b5b73fc2938->enter($__internal_ad94caf507e7e919908e77289c2da33fa8078ae9d2156a77ff179b5b73fc2938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_69800abf6eba62bba19771ffc5f551f453b339d657d2ca0b242e8dcfe7a05eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69800abf6eba62bba19771ffc5f551f453b339d657d2ca0b242e8dcfe7a05eca->enter($__internal_69800abf6eba62bba19771ffc5f551f453b339d657d2ca0b242e8dcfe7a05eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ad94caf507e7e919908e77289c2da33fa8078ae9d2156a77ff179b5b73fc2938->leave($__internal_ad94caf507e7e919908e77289c2da33fa8078ae9d2156a77ff179b5b73fc2938_prof);

        
        $__internal_69800abf6eba62bba19771ffc5f551f453b339d657d2ca0b242e8dcfe7a05eca->leave($__internal_69800abf6eba62bba19771ffc5f551f453b339d657d2ca0b242e8dcfe7a05eca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/lindsey/Documents/L3_MIAGE/projet/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
