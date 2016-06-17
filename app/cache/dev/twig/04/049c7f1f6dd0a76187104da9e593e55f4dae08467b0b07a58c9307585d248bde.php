<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_161bc9627267f06ff9573b80a55528c852e4f935814a8024990942d3e80ba278 extends Twig_Template
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
        $__internal_cbad00c9361dddf7da3de04cf4449e07ad0a871c7e8542fdca9a1e51eccdc07e = $this->env->getExtension("native_profiler");
        $__internal_cbad00c9361dddf7da3de04cf4449e07ad0a871c7e8542fdca9a1e51eccdc07e->enter($__internal_cbad00c9361dddf7da3de04cf4449e07ad0a871c7e8542fdca9a1e51eccdc07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cbad00c9361dddf7da3de04cf4449e07ad0a871c7e8542fdca9a1e51eccdc07e->leave($__internal_cbad00c9361dddf7da3de04cf4449e07ad0a871c7e8542fdca9a1e51eccdc07e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
