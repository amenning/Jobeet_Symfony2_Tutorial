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
        $__internal_a194ab10b3d58d72c37ae79e4bb06db4468f68f53e5d7364c6233bdff61a8d89 = $this->env->getExtension("native_profiler");
        $__internal_a194ab10b3d58d72c37ae79e4bb06db4468f68f53e5d7364c6233bdff61a8d89->enter($__internal_a194ab10b3d58d72c37ae79e4bb06db4468f68f53e5d7364c6233bdff61a8d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a194ab10b3d58d72c37ae79e4bb06db4468f68f53e5d7364c6233bdff61a8d89->leave($__internal_a194ab10b3d58d72c37ae79e4bb06db4468f68f53e5d7364c6233bdff61a8d89_prof);

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
