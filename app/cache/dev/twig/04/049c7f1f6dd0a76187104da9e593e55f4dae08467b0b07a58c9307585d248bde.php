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
        $__internal_8b68db3e60c450c9e57919342f09f232664b562fe3389492d66ee2712ec4a674 = $this->env->getExtension("native_profiler");
        $__internal_8b68db3e60c450c9e57919342f09f232664b562fe3389492d66ee2712ec4a674->enter($__internal_8b68db3e60c450c9e57919342f09f232664b562fe3389492d66ee2712ec4a674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8b68db3e60c450c9e57919342f09f232664b562fe3389492d66ee2712ec4a674->leave($__internal_8b68db3e60c450c9e57919342f09f232664b562fe3389492d66ee2712ec4a674_prof);

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
