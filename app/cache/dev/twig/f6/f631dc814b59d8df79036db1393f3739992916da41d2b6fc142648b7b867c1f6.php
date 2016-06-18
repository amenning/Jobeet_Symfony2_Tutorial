<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5a0a8d0fd313c93f91b25b71310d0b28fb72ccca6bd8c641d97e14e05953b3bc extends Twig_Template
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
        $__internal_7cdfb3f7ac76fcab69f4de022b30f9ab133a106b7d687a33ebeb96bf0bdd30fb = $this->env->getExtension("native_profiler");
        $__internal_7cdfb3f7ac76fcab69f4de022b30f9ab133a106b7d687a33ebeb96bf0bdd30fb->enter($__internal_7cdfb3f7ac76fcab69f4de022b30f9ab133a106b7d687a33ebeb96bf0bdd30fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7cdfb3f7ac76fcab69f4de022b30f9ab133a106b7d687a33ebeb96bf0bdd30fb->leave($__internal_7cdfb3f7ac76fcab69f4de022b30f9ab133a106b7d687a33ebeb96bf0bdd30fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
