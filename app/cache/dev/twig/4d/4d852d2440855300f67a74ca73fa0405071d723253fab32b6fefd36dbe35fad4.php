<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3dca4b4eac6f369922e371551a8d2ed79ce1ef78b77199fa1de9bf8c75b4e512 extends Twig_Template
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
        $__internal_08c4274a4c3c03112c86183c4f2627315f31b0e7325bc581b086c6c0ce20ccb4 = $this->env->getExtension("native_profiler");
        $__internal_08c4274a4c3c03112c86183c4f2627315f31b0e7325bc581b086c6c0ce20ccb4->enter($__internal_08c4274a4c3c03112c86183c4f2627315f31b0e7325bc581b086c6c0ce20ccb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_08c4274a4c3c03112c86183c4f2627315f31b0e7325bc581b086c6c0ce20ccb4->leave($__internal_08c4274a4c3c03112c86183c4f2627315f31b0e7325bc581b086c6c0ce20ccb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
