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
        $__internal_63fbe0e2d4698f62c8f834a172558cac7fe7baeb13565942f77e3cfd4d8bcc9a = $this->env->getExtension("native_profiler");
        $__internal_63fbe0e2d4698f62c8f834a172558cac7fe7baeb13565942f77e3cfd4d8bcc9a->enter($__internal_63fbe0e2d4698f62c8f834a172558cac7fe7baeb13565942f77e3cfd4d8bcc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_63fbe0e2d4698f62c8f834a172558cac7fe7baeb13565942f77e3cfd4d8bcc9a->leave($__internal_63fbe0e2d4698f62c8f834a172558cac7fe7baeb13565942f77e3cfd4d8bcc9a_prof);

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
