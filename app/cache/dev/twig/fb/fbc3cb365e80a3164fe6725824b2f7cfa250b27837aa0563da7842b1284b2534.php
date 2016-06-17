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
        $__internal_7bebae750fa2def98359364046f8b81d16d111f7a457a3ac881e8ad7b4858cba = $this->env->getExtension("native_profiler");
        $__internal_7bebae750fa2def98359364046f8b81d16d111f7a457a3ac881e8ad7b4858cba->enter($__internal_7bebae750fa2def98359364046f8b81d16d111f7a457a3ac881e8ad7b4858cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7bebae750fa2def98359364046f8b81d16d111f7a457a3ac881e8ad7b4858cba->leave($__internal_7bebae750fa2def98359364046f8b81d16d111f7a457a3ac881e8ad7b4858cba_prof);

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
