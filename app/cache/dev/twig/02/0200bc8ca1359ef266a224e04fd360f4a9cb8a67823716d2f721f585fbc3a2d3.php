<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c82f8542a75225f687d11d1bc690cb10ef908e95e6427824d372d58de2587431 extends Twig_Template
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
        $__internal_2ecbf47ca89f646d0853f2e362481934741c08360eee8f221eb91352ddaab1bf = $this->env->getExtension("native_profiler");
        $__internal_2ecbf47ca89f646d0853f2e362481934741c08360eee8f221eb91352ddaab1bf->enter($__internal_2ecbf47ca89f646d0853f2e362481934741c08360eee8f221eb91352ddaab1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2ecbf47ca89f646d0853f2e362481934741c08360eee8f221eb91352ddaab1bf->leave($__internal_2ecbf47ca89f646d0853f2e362481934741c08360eee8f221eb91352ddaab1bf_prof);

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
