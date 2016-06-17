<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d3a858deced22bead285be6df11cb71149667b3e731bd5e3c83eef98100978f9 extends Twig_Template
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
        $__internal_81f3185daa519d05408cad92a642e3cb42db0059c3e6e97f05a913d2cb171016 = $this->env->getExtension("native_profiler");
        $__internal_81f3185daa519d05408cad92a642e3cb42db0059c3e6e97f05a913d2cb171016->enter($__internal_81f3185daa519d05408cad92a642e3cb42db0059c3e6e97f05a913d2cb171016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_81f3185daa519d05408cad92a642e3cb42db0059c3e6e97f05a913d2cb171016->leave($__internal_81f3185daa519d05408cad92a642e3cb42db0059c3e6e97f05a913d2cb171016_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
