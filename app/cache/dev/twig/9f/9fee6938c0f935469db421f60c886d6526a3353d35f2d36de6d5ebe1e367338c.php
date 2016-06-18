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
        $__internal_764c9cd5c36fec2e52686bf5f5ce80aa97694b3a47dcadecbc8bd7a7afe6d5e3 = $this->env->getExtension("native_profiler");
        $__internal_764c9cd5c36fec2e52686bf5f5ce80aa97694b3a47dcadecbc8bd7a7afe6d5e3->enter($__internal_764c9cd5c36fec2e52686bf5f5ce80aa97694b3a47dcadecbc8bd7a7afe6d5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_764c9cd5c36fec2e52686bf5f5ce80aa97694b3a47dcadecbc8bd7a7afe6d5e3->leave($__internal_764c9cd5c36fec2e52686bf5f5ce80aa97694b3a47dcadecbc8bd7a7afe6d5e3_prof);

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
