<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a5a994b17aee700b7efef4469013f2e26bb3867de4e3d36d5136ff978ab5452c extends Twig_Template
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
        $__internal_0d44c38c01f1e28c14fdc97af00b909ce8c611892d1877b8b8bbb3fef0a21f37 = $this->env->getExtension("native_profiler");
        $__internal_0d44c38c01f1e28c14fdc97af00b909ce8c611892d1877b8b8bbb3fef0a21f37->enter($__internal_0d44c38c01f1e28c14fdc97af00b909ce8c611892d1877b8b8bbb3fef0a21f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0d44c38c01f1e28c14fdc97af00b909ce8c611892d1877b8b8bbb3fef0a21f37->leave($__internal_0d44c38c01f1e28c14fdc97af00b909ce8c611892d1877b8b8bbb3fef0a21f37_prof);

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
