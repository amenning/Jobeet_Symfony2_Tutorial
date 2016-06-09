<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e5d7269e3c192171e7fd6f1c1a0d8b6205cf541cee58f6fed86499fbadcb3251 extends Twig_Template
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
        $__internal_dee4e36ba07764ebb7944ec0870a12e012e495e4658a33cd7e1bbcbfa84787da = $this->env->getExtension("native_profiler");
        $__internal_dee4e36ba07764ebb7944ec0870a12e012e495e4658a33cd7e1bbcbfa84787da->enter($__internal_dee4e36ba07764ebb7944ec0870a12e012e495e4658a33cd7e1bbcbfa84787da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_dee4e36ba07764ebb7944ec0870a12e012e495e4658a33cd7e1bbcbfa84787da->leave($__internal_dee4e36ba07764ebb7944ec0870a12e012e495e4658a33cd7e1bbcbfa84787da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
