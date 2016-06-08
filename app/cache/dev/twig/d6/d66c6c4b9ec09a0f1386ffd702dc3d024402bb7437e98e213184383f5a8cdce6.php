<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e0456426e5f2a51477ed361602d7e1de7f453a184f721d27ddd4f75ab3e22fc4 extends Twig_Template
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
        $__internal_636743f1ce5ed1228e784d4a594a4065157e7adedfe5fc8a127ab668ccbb61e8 = $this->env->getExtension("native_profiler");
        $__internal_636743f1ce5ed1228e784d4a594a4065157e7adedfe5fc8a127ab668ccbb61e8->enter($__internal_636743f1ce5ed1228e784d4a594a4065157e7adedfe5fc8a127ab668ccbb61e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_636743f1ce5ed1228e784d4a594a4065157e7adedfe5fc8a127ab668ccbb61e8->leave($__internal_636743f1ce5ed1228e784d4a594a4065157e7adedfe5fc8a127ab668ccbb61e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
