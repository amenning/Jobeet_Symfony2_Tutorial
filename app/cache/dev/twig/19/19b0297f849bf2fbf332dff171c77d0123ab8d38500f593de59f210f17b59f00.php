<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c99b08111d0727fc23cba2220b786f3b11169e44289585d6a12baea7dd50a820 extends Twig_Template
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
        $__internal_10f6e9bc060ce40fcf30d11eda5b83704cb8035e79831d5fdab5aca4bddddfe7 = $this->env->getExtension("native_profiler");
        $__internal_10f6e9bc060ce40fcf30d11eda5b83704cb8035e79831d5fdab5aca4bddddfe7->enter($__internal_10f6e9bc060ce40fcf30d11eda5b83704cb8035e79831d5fdab5aca4bddddfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_10f6e9bc060ce40fcf30d11eda5b83704cb8035e79831d5fdab5aca4bddddfe7->leave($__internal_10f6e9bc060ce40fcf30d11eda5b83704cb8035e79831d5fdab5aca4bddddfe7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
