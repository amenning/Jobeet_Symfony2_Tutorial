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
        $__internal_4c36de26528990e4f28749a5fe456b6a7f7edbcb8fef3cb5f1c28c9461d05c63 = $this->env->getExtension("native_profiler");
        $__internal_4c36de26528990e4f28749a5fe456b6a7f7edbcb8fef3cb5f1c28c9461d05c63->enter($__internal_4c36de26528990e4f28749a5fe456b6a7f7edbcb8fef3cb5f1c28c9461d05c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4c36de26528990e4f28749a5fe456b6a7f7edbcb8fef3cb5f1c28c9461d05c63->leave($__internal_4c36de26528990e4f28749a5fe456b6a7f7edbcb8fef3cb5f1c28c9461d05c63_prof);

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
