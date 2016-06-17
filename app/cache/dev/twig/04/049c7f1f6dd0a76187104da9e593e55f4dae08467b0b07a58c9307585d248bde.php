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
        $__internal_05a13ae5cfbbf090b797c36cd8ecffc298eea8a78af687da6db33f7aab2b1dd6 = $this->env->getExtension("native_profiler");
        $__internal_05a13ae5cfbbf090b797c36cd8ecffc298eea8a78af687da6db33f7aab2b1dd6->enter($__internal_05a13ae5cfbbf090b797c36cd8ecffc298eea8a78af687da6db33f7aab2b1dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_05a13ae5cfbbf090b797c36cd8ecffc298eea8a78af687da6db33f7aab2b1dd6->leave($__internal_05a13ae5cfbbf090b797c36cd8ecffc298eea8a78af687da6db33f7aab2b1dd6_prof);

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
