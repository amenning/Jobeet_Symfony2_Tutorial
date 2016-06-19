<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_09e8d67b3558839623261c9da87f2567b4d970907e1d207add60f917d760ec92 extends Twig_Template
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
        $__internal_5b02edd3d11150dbefbc68b0ac3d60f9341d4d63185e70be8fe66ed30354c0fa = $this->env->getExtension("native_profiler");
        $__internal_5b02edd3d11150dbefbc68b0ac3d60f9341d4d63185e70be8fe66ed30354c0fa->enter($__internal_5b02edd3d11150dbefbc68b0ac3d60f9341d4d63185e70be8fe66ed30354c0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5b02edd3d11150dbefbc68b0ac3d60f9341d4d63185e70be8fe66ed30354c0fa->leave($__internal_5b02edd3d11150dbefbc68b0ac3d60f9341d4d63185e70be8fe66ed30354c0fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
