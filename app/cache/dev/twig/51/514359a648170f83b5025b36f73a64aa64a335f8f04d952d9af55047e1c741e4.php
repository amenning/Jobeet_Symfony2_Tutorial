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
        $__internal_4b4873f863223958d7b48b409bd8fb23c8667bbc816fb273ea127317ad777815 = $this->env->getExtension("native_profiler");
        $__internal_4b4873f863223958d7b48b409bd8fb23c8667bbc816fb273ea127317ad777815->enter($__internal_4b4873f863223958d7b48b409bd8fb23c8667bbc816fb273ea127317ad777815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4b4873f863223958d7b48b409bd8fb23c8667bbc816fb273ea127317ad777815->leave($__internal_4b4873f863223958d7b48b409bd8fb23c8667bbc816fb273ea127317ad777815_prof);

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
