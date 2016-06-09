<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6f65aa6e362fd30b1c32c86a062d890ad05b0f307974071d7f93c9e93585ce17 extends Twig_Template
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
        $__internal_0a893c1367e4c50179dc88df3567f6684fc5836ae7abfc38450dffb4eeb0855d = $this->env->getExtension("native_profiler");
        $__internal_0a893c1367e4c50179dc88df3567f6684fc5836ae7abfc38450dffb4eeb0855d->enter($__internal_0a893c1367e4c50179dc88df3567f6684fc5836ae7abfc38450dffb4eeb0855d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0a893c1367e4c50179dc88df3567f6684fc5836ae7abfc38450dffb4eeb0855d->leave($__internal_0a893c1367e4c50179dc88df3567f6684fc5836ae7abfc38450dffb4eeb0855d_prof);

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
