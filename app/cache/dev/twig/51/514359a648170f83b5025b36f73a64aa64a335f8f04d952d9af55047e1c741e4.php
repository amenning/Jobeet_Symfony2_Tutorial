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
        $__internal_767e7a385f3d06f146fee8546ef99ce73cf31105f2590c07db86b847e6a4fd0f = $this->env->getExtension("native_profiler");
        $__internal_767e7a385f3d06f146fee8546ef99ce73cf31105f2590c07db86b847e6a4fd0f->enter($__internal_767e7a385f3d06f146fee8546ef99ce73cf31105f2590c07db86b847e6a4fd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_767e7a385f3d06f146fee8546ef99ce73cf31105f2590c07db86b847e6a4fd0f->leave($__internal_767e7a385f3d06f146fee8546ef99ce73cf31105f2590c07db86b847e6a4fd0f_prof);

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
