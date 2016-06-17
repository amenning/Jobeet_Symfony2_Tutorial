<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e1880ade586176fae0875dd0ba1967bb8f2af1724f74ebd91ccf0c0908c2b6d5 extends Twig_Template
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
        $__internal_cde20299abad11ebe7350944686b0db1a3ee218315c923f9dfebde2f7e917a58 = $this->env->getExtension("native_profiler");
        $__internal_cde20299abad11ebe7350944686b0db1a3ee218315c923f9dfebde2f7e917a58->enter($__internal_cde20299abad11ebe7350944686b0db1a3ee218315c923f9dfebde2f7e917a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cde20299abad11ebe7350944686b0db1a3ee218315c923f9dfebde2f7e917a58->leave($__internal_cde20299abad11ebe7350944686b0db1a3ee218315c923f9dfebde2f7e917a58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
